<?php
mysqli_report(MYSQLI_REPORT_OFF);
$success = false;
$error = '';

if (isset($_POST["update"])) {
    $id = isset($_POST["id"]) ? trim($_POST["id"]) : '';
    $name = trim($_POST["name"]);
    $branch = trim($_POST["branch"]);
    $sem = trim($_POST["sem"]);
    $email = strtolower(trim($_POST["email"]));
    $phone = trim($_POST["phone"]);
    $college = trim($_POST["college"]);

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = "❌ Please enter a valid email address!";
    } elseif(strlen($name) < 3){
        $error = "❌ Name must be at least 3 characters!";
    } elseif(!preg_match('/^[0-9]{10}$/', $phone)){
        $error = "❌ Phone must be exactly 10 digits!";
    } elseif(empty($branch)){
        $error = "❌ Please enter your branch!";
    } elseif(empty($sem)){
        $error = "❌ Please enter your semester!";
    } else {
        include 'classes/db1.php';
        
        $id = mysqli_real_escape_string($conn, htmlspecialchars($id));
        $name = mysqli_real_escape_string($conn, htmlspecialchars($name));
        $branch = mysqli_real_escape_string($conn, htmlspecialchars($branch));
        $sem = mysqli_real_escape_string($conn, htmlspecialchars($sem));
        $email = mysqli_real_escape_string($conn, htmlspecialchars($email));
        $phone = mysqli_real_escape_string($conn, htmlspecialchars($phone));
        $college = mysqli_real_escape_string($conn, htmlspecialchars($college));

        $INSERT = "INSERT INTO participent (id,name,branch,sem,email,phone,college) 
                   VALUES('$id','$name','$branch','$sem','$email','$phone','$college')";

        if($conn->query($INSERT) === TRUE){
            $success = true;
        } else {
            if(strpos($conn->error, 'Duplicate') !== false){
                $error = '❌ This ID is already registered! Please use different ID.';
            } else {
                $error = '❌ ' . $conn->error;
            }
        }
        $conn->close();
    }
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Register Here</title>
        <?php require 'utils/styles.php'; ?>
        <style>
        .success-box{background:#d4edda;border:2px solid #28a745;border-radius:15px;padding:30px;text-align:center;margin:30px auto;max-width:500px;}
        .success-box h2{color:#28a745;font-size:30px;}
        .success-box p{color:#155724;font-size:16px;}
        .error-box{background:#f8d7da;border:2px solid #dc3545;border-radius:10px;padding:15px;color:#721c24;margin-bottom:20px;}
        </style>
    </head>
    <body>
    <?php require 'utils/header.php'; ?>
    <div class="content">
        <div class="container">
            <div class="col-md-6 col-md-offset-3">
            <?php if($success): ?>
                <div class="success-box">
                    <h2>✅ Registration Successful!</h2>
                    <p>Your registration is successful!</p>
                    <br>
                    <a href="index.php" class="btn btn-default">Go to Home</a>
                    <a href="register.php" class="btn btn-default">Register Again</a>
                </div>
            <?php else: ?>
                <?php if($error): ?>
                <div class="error-box"><?php echo $error; ?></div>
                <?php endif; ?>
                <h2 style="color:#1a1a2e;border-bottom:3px solid #00d4ff;padding-bottom:10px;">Register Here</h2>
                <br>
                <form method="POST">
                    <label>Student ID:</label><br>
                    <input type="text" name="id" class="form-control" placeholder="Enter Your ID"><br><br>
                    <label>Student Name:</label><br>
                    <input type="text" name="name" class="form-control" required placeholder="Full Name"><br><br>
                    <label>Branch:</label><br>
                    <input type="text" name="branch" class="form-control" required placeholder="e.g. CSE, BCA, BBA, B.COM"><br><br>
                    <label>Semester:</label><br>
                    <input type="text" name="sem" class="form-control" required placeholder="e.g. 1, 2, 3"><br><br>
                    <label>Email:</label><br>
                    <input type="text" name="email" class="form-control" required placeholder="Email Address (lowercase only)"><br><br>
                    <label>Phone:</label><br>
                    <input type="text" name="phone" class="form-control" required placeholder="10 Digit Number"><br><br>
                    <label>College:</label><br>
                    <input type="text" name="college" class="form-control" required placeholder="College Name"><br><br>
                    <button type="submit" name="update" class="btn btn-default">Submit ✅</button><br><br>
                </form>
            <?php endif; ?>
            </div>
        </div>
    </div>
    <?php require 'utils/footer.php'; ?>
    </body>
</html>
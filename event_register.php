<?php
session_start();
$success = false;
$error = '';
$event_id = isset($_GET['event_id']) ? (int)$_GET['event_id'] : 0;

if (isset($_POST["update"])) {
    include 'classes/db1.php';
    
    // Input sanitize karo
    $id = mysqli_real_escape_string($conn, htmlspecialchars(trim($_POST["id"])));
    $event_id = (int)$_POST["event_id"];

    if(empty($id)){
        $error = "Please enter your Student ID!";
    } else {
        // Check 1: Student registered hai ya nahi
        $check_student = mysqli_query($conn, "SELECT * FROM participent WHERE id='$id'");
        
        if(mysqli_num_rows($check_student) == 0){
            $error = "❌ Student ID not found! Please <a href='register.php'>register here</a> first.";
        } else {
            // Check 2: Already is event mein register hai ya nahi
            $check_duplicate = mysqli_query($conn, "SELECT * FROM registered WHERE id='$id' AND event_id='$event_id'");
            
            if(mysqli_num_rows($check_duplicate) > 0){
                $error = "⚠️ You are already registered for this event!";
            } else {
                // Check 3: Event exist karta hai ya nahi
                $check_event = mysqli_query($conn, "SELECT * FROM events WHERE event_id='$event_id'");
                
                if(mysqli_num_rows($check_event) == 0){
                    $error = "❌ Invalid event!";
                } else {
                    // Sab theek hai — register karo
                    $INSERT = "INSERT INTO registered (id, event_id) VALUES('$id', '$event_id')";
                    if($conn->query($INSERT) === TRUE){
                        $success = true;
                    } else {
                        $error = "Registration failed! Please try again.";
                    }
                }
            }
        }
    }
    $conn->close();
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Event Registration - Satyam200k</title>
    <?php require 'utils/styles.php'; ?>
    <style>
    .success-box{background:#d4edda;border:2px solid #28a745;border-radius:15px;padding:30px;text-align:center;margin:30px auto;max-width:500px;}
    .success-box h2{color:#28a745;font-size:28px;}
    .success-box p{color:#155724;font-size:16px;}
    .error-box{background:#f8d7da;border:2px solid #dc3545;border-radius:10px;padding:15px;color:#721c24;margin-bottom:20px;text-align:center;}
    .warning-box{background:#fff3cd;border:2px solid #ffc107;border-radius:10px;padding:15px;color:#856404;margin-bottom:20px;text-align:center;}
    .register-form{background:white;border-radius:15px;padding:30px;box-shadow:0 5px 20px rgba(0,0,0,0.1);margin:30px 0;border-top:4px solid #00d4ff;}
    </style>
</head>
<body>
<?php require 'utils/header.php'; ?>
<div class="content">
    <div class="container">
        <div class="col-md-6 col-md-offset-3">
        <?php if($success): ?>
            <div class="success-box">
                <h2>✅ Event Registration Successful!</h2>
                <p>You have successfully registered for this event!</p>
                <p><strong>Your ID:</strong> <?php echo htmlspecialchars($_POST['id']); ?></p>
                <br>
                <a href="index.php" class="btn btn-default">Go to Home</a>
                <a href="index.php" class="btn btn-default">View More Events</a>
            </div>
        <?php else: ?>
            <?php if($error): ?>
            <?php if(strpos($error, '⚠️') !== false): ?>
            <div class="warning-box"><?php echo $error; ?></div>
            <?php else: ?>
            <div class="error-box"><?php echo $error; ?></div>
            <?php endif; ?>
            <?php endif; ?>

            <div class="register-form">
                <h2 style="color:#1a1a2e;border-bottom:3px solid #00d4ff;padding-bottom:10px;">
                    🎯 Register for Event
                </h2>
                <br>
                <form method="POST">
                    <input type="hidden" name="event_id" value="<?php echo $event_id; ?>">

                    <label><strong>Enter Your Student ID:</strong></label><br>
                    <input type="text" name="id" class="form-control" required placeholder="Enter Your Student ID"><br><br>

                    <div style="background:#e8f4fd;border-radius:10px;padding:15px;margin-bottom:20px;">
                        <p style="color:#0066cc;margin:0;font-size:14px;">
                            ℹ️ <strong>Note:</strong> You must be a registered student first!
                            <a href="register.php">Click here to register</a> if not done yet.
                        </p>
                    </div>

                    <button type="submit" name="update" class="btn btn-default" style="width:100%;">
                        Register for Event ✅
                    </button>
                </form>
            </div>
        <?php endif; ?>
        </div>
    </div>
</div>
<?php require 'utils/footer.php'; ?>
</body>
</html>
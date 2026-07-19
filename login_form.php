<?php
session_start();

if(isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true){
    header('Location: adminPage.php');
    exit;
}

$error = '';

if (isset($_POST["update"])) {
    $username = htmlspecialchars(trim($_POST['name']));
    $password = $_POST['password'];

    $correct_username = 'cimage_admin';
    $correct_password = 'Cimage@2026';

    if($username === $correct_username && $password === $correct_password){
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_name'] = $username;
        header('Location: adminPage.php');
        exit;
    } else {
        $error = 'Invalid Username or Password!';
    }
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Admin Login - Satyam200k</title>
        <?php require 'utils/styles.php'; ?>
        <style>
        .login-box {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            margin: 40px auto;
            border-top: 5px solid #00d4ff;
        }
        .login-box h2 {
            color: #1a1a2e;
            border-bottom: 3px solid #00d4ff;
            padding-bottom: 10px;
            margin-bottom: 25px;
        }
        .error-box {
            background: #f8d7da;
            border: 2px solid #dc3545;
            border-radius: 10px;
            padding: 12px;
            color: #721c24;
            margin-bottom: 20px;
            text-align: center;
        }
        .lock-icon {
            text-align: center;
            font-size: 50px;
            margin-bottom: 15px;
        }
        </style>
    </head>
    <body>
    <?php require 'utils/header.php'; ?>
    <div class="content">
        <div class="container">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-box">
                    <div class="lock-icon">🔐</div>
                    <h2 style="text-align:center;">Admin Login</h2>

                    <?php if($error): ?>
                    <div class="error-box">❌ <?php echo $error; ?></div>
                    <?php endif; ?>

                    <form method="POST">
                        <label>Username:</label><br>
                        <input type="text" name="name" class="form-control" required placeholder="Enter Username"><br><br>

                        <label>Password:</label><br>
                        <input type="password" name="password" class="form-control" required placeholder="Enter Password"><br><br>

                        <button type="submit" name="update" class="btn btn-default" style="width:100%;">
                            Login 🔓
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php require 'utils/footer.php'; ?>
    </body>
</html>
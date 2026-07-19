<?php
session_start();
$conn = new mysqli("localhost", "root", "", "event_db");

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE username=?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        if (password_verify($password, $row['password'])) {
            $_SESSION['admin'] = $username;
            header("Location: admin.php");
        } else {
            echo "Wrong password";
        }
    } else {
        echo "User not found";
    }
}
?>

<form method="POST">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <button name="login">Login</button>
</form>
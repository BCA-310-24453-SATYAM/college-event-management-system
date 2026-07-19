<?php
session_start();

// Session check — login ke bina access nahi
if(!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true){
    header('Location: login_form.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Admin Panel - Satyam200k</title>
    <?php require 'utils/styles.php'; ?>
</head>
<body>
<?php include 'utils/adminHeader.php'; ?>
<div class="content">
    <div class="container">
        <h1>Welcome, <?php echo $_SESSION['admin_name']; ?>! 👋</h1>
        <hr>
        <div class="row">
            <div class="col-md-3">
                <a href="Stu_details.php" class="btn btn-default" style="width:100%;margin-bottom:10px;">
                    👥 Student Details
                </a>
            </div>
            <div class="col-md-3">
                <a href="Stu_cordinator.php" class="btn btn-default" style="width:100%;margin-bottom:10px;">
                    🎓 Student Co-ordinator
                </a>
            </div>
            <div class="col-md-3">
                <a href="Staff_cordinator.php" class="btn btn-default" style="width:100%;margin-bottom:10px;">
                    👨‍🏫 Staff Co-ordinator
                </a>
            </div>
            <div class="col-md-3">
                <a href="createEventForm.php" class="btn btn-default" style="width:100%;margin-bottom:10px;">
                    ➕ Create Event
                </a>
            </div>
        </div>
    </div>
</div>
<?php include 'utils/footer.php'; ?>
</body>
</html>
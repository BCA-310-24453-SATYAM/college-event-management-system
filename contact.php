<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Contact Us</title>
        <?php require 'utils/styles.php'; ?>
        <style>
        .contact-hero {
            background: linear-gradient(135deg, #1a1a2e, #16213e);
            padding: 50px 0;
            text-align: center;
            margin-bottom: 40px;
        }
        .contact-hero h1 {
            color: #00d4ff !important;
            -webkit-text-fill-color: #00d4ff !important;
            font-size: 42px;
            font-weight: 800;
            letter-spacing: 3px;
        }
        .contact-hero p {
            color: #ccc;
            font-size: 16px;
        }

        .contact-card {
            background: white;
            border-radius: 20px;
            padding: 35px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            margin-bottom: 30px;
            border-top: 5px solid #00d4ff;
        }
        .contact-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,212,255,0.2);
        }
        .contact-card .icon-circle {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #00d4ff, #0099cc);
            border-radius: 50%;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .contact-card .icon-circle span {
            color: white;
            font-size: 30px;
        }
        .contact-card h2 {
            color: #1a1a2e;
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 5px;
        }
        .contact-card .role {
            color: #00d4ff;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .contact-info-item {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 10px 0;
            color: #555;
            font-size: 15px;
        }
        .contact-info-item span {
            color: #00d4ff;
            margin-right: 10px;
            font-size: 18px;
        }

        .map-section {
            background: #f5f7fa;
            border-radius: 20px;
            padding: 40px;
            margin: 40px 0;
            text-align: center;
            border: 2px solid #00d4ff;
        }
        .map-section h2 {
            color: #1a1a2e;
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 20px;
        }
        .map-section p {
            color: #555;
            font-size: 16px;
            line-height: 2;
        }
        .map-section .address-icon {
            font-size: 50px;
            color: #00d4ff;
            margin-bottom: 15px;
        }

        .social-section {
            text-align: center;
            padding: 30px 0;
        }
        .social-section h2 {
            color: #1a1a2e;
            margin-bottom: 20px;
            font-size: 24px;
        }
        .social-btn {
            display: inline-block;
            padding: 12px 25px;
            border-radius: 25px;
            margin: 5px;
            color: white !important;
            font-weight: 600;
            text-decoration: none;
            transition: transform 0.3s;
        }
        .social-btn:hover {
            transform: translateY(-3px);
            color: white !important;
            text-decoration: none;
        }
        .fb { background: #3b5998; }
        .ig { background: linear-gradient(135deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888); }
        .yt { background: #ff0000; }
        </style>
    </head>
    <body>
        <?php require 'utils/header.php'; ?>

        <!-- Hero Section -->
        <div class="contact-hero">
            <h1>📞 Contact Us</h1>
            <p>Have questions? We'd love to hear from you!</p>
        </div>

        <div class="content">
            <div class="container">

                <!-- Contact Cards -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-card">
                            <div class="icon-circle">
                                <span class="glyphicon glyphicon-user"></span>
                            </div>
                            <h2>SATYAM</h2>
                            <p class="role">BCA Student Coordinator</p>
                            <div class="contact-info-item">
                                <span class="glyphicon glyphicon-envelope"></span>
                                satyam980ku@gmail.com
                            </div>
                            <div class="contact-info-item">
                                <span class="glyphicon glyphicon-phone"></span>
                                +91 9865512361
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-card">
                            <div class="icon-circle">
                                <span class="glyphicon glyphicon-user"></span>
                            </div>
                            <h2>RAHUL</h2>
                            <p class="role">BCA Student Coordinator</p>
                            <div class="contact-info-item">
                                <span class="glyphicon glyphicon-envelope"></span>
                                rahulbcaku44@gmail.com
                            </div>
                            <div class="contact-info-item">
                                <span class="glyphicon glyphicon-phone"></span>
                                +91 9999456622
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Address Section -->
                <div class="map-section">
                    <div class="address-icon">
                        <span class="glyphicon glyphicon-map-marker"></span>
                    </div>
                    <h2>📍 Our Location</h2>
                    <p>
                        <strong>CIMAGE Professional College</strong><br>
                        Boring Road, Atal Path<br>
                        Patna, Bihar - 800001<br>
                        <strong>Affiliated to:</strong> Aryabhatta Knowledge University (AKU)
                    </p>
                </div>

                <!-- Message Form -->
<div style="background:white;border-radius:20px;padding:40px;box-shadow:0 10px 30px rgba(0,0,0,0.1);border-top:5px solid #00d4ff;margin-bottom:40px;">
    <h2 style="color:#1a1a2e;border-bottom:3px solid #00d4ff;padding-bottom:10px;">✉️ Send Us a Message</h2>
    <br>

    <?php
    if(isset($_POST['send'])){
        include 'classes/db1.php';
        $sender_name = mysqli_real_escape_string($conn, htmlspecialchars(trim($_POST['sender_name'])));
        $sender_email = mysqli_real_escape_string($conn, htmlspecialchars(trim($_POST['sender_email'])));
        $subject = mysqli_real_escape_string($conn, htmlspecialchars(trim($_POST['subject'])));
        $message = mysqli_real_escape_string($conn, htmlspecialchars(trim($_POST['message'])));

        $conn->query("CREATE TABLE IF NOT EXISTS messages (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(100),
            email VARCHAR(200),
            subject VARCHAR(200),
            message TEXT,
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP
        )");

        $INSERT = "INSERT INTO messages (name,email,subject,message) VALUES('$sender_name','$sender_email','$subject','$message')";
        
        if($conn->query($INSERT) === TRUE){
            echo '<div style="background:#d4edda;border:2px solid #28a745;border-radius:15px;padding:25px;text-align:center;">
                <h3 style="color:#28a745;">✅ Message Sent Successfully!</h3>
                <p>Thank you! We will get back to you soon.</p>
            </div>';
        } else {
            echo '<div style="background:#f8d7da;border:2px solid #dc3545;border-radius:10px;padding:15px;color:#721c24;text-align:center;">
                ❌ Failed to send message. Please try again!
            </div>';
        }
    } else {
    ?>
    <form method="POST">
        <div class="row">
            <div class="col-md-6">
                <label>Your Name: *</label><br>
                <input type="text" name="sender_name" class="form-control" required placeholder="Full Name"><br><br>
            </div>
            <div class="col-md-6">
                <label>Your Email: *</label><br>
                <input type="email" name="sender_email" class="form-control" required placeholder="Email Address"><br><br>
            </div>
        </div>
        <label>Subject:</label><br>
        <input type="text" name="subject" class="form-control" placeholder="What is this about?"><br><br>
        <label>Message: *</label><br>
        <textarea name="message" class="form-control" rows="5" required placeholder="Write your message here..."></textarea><br><br>
        <button type="submit" name="send" class="btn btn-default">Send Message 📨</button>
    </form>
    <?php } ?>
</div>

                <!-- Social Media -->
                <div class="social-section">
                    <h2>Follow Us On</h2>
                    <a href="https://www.facebook.com" class="social-btn fb">
                        <span class="glyphicon glyphicon-thumbs-up"></span> Facebook
                    </a>
                    <a href="https://www.instagram.com" class="social-btn ig">
                        📸 Instagram
                    </a>
                    <a href="https://www.youtube.com" class="social-btn yt">
                        ▶ YouTube
                    </a>
                </div>

            </div>
        </div>

        <?php require 'utils/footer.php'; ?>
    </body>
</html>
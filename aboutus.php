<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>About This E-vent</title>
    <?php require 'utils/styles.php'; ?>
    <style>
    .about-section {
        background: white;
        border-radius: 15px;
        padding: 35px;
        margin-bottom: 25px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        border-left: 5px solid #00d4ff;
    }

    .about-section h2 {
        color: #1a1a2e;
        font-size: 28px;
        margin-bottom: 15px;
        border-bottom: 2px solid #00d4ff;
        padding-bottom: 10px;
    }

    .about-section p {
        font-size: 17px;
        color: #444;
        line-height: 1.9;
    }

    .event-card {
        background: linear-gradient(135deg, #1a1a2e, #16213e);
        border-radius: 15px;
        padding: 35px;
        margin-bottom: 25px;
        color: white;
        box-shadow: 0 5px 20px rgba(0,0,0,0.2);
    }

    .event-card h2 {
        color: #00d4ff;
        font-size: 28px;
        margin-bottom: 15px;
        border-bottom: 2px solid #00d4ff;
        padding-bottom: 10px;
    }

    .event-card p {
        font-size: 17px;
        color: #ccc;
        line-height: 1.9;
    }

    .category-box {
        background: #f5f7fa;
        border-radius: 10px;
        padding: 20px;
        margin: 10px 0;
        border-left: 4px solid #00d4ff;
    }

    .category-box h4 {
        color: #1a1a2e;
        margin-bottom: 5px;
    }

    .category-box p {
        color: #666;
        font-size: 15px;
        margin: 0;
    }

    .page-title {
        color: #1a1a2e;
        font-size: 42px;
        font-weight: 800;
        border-bottom: 4px solid #00d4ff;
        padding-bottom: 10px;
        display: inline-block;
        margin-bottom: 30px;
    }

    .highlight {
        color: #00d4ff;
        font-weight: bold;
    }
    </style>
</head>

<body>
    <?php require 'utils/header.php'; ?>

    <div class="content">
        <div class="container">
            <br>
            <h1 class="page-title">About Us</h1>

            <!-- College Section -->
            <div class="about-section">
                <h2>🏫 About CIMAGE Professional College</h2>
                <p>
                    <span class="highlight">CIMAGE Professional College</span>, affiliated to 
                    <span class="highlight">Aryabhatta Knowledge University (AKU)</span>, Patna, Bihar, 
                    is approved by All India Council for Technical Education (AICTE), New Delhi, 
                    and recognized by the Government of Bihar.
                </p>
                <p>
                    Established with a vision to provide quality professional education, CIMAGE has grown 
                    into one of the premier institutions in Bihar. The college offers a wide range of 
                    undergraduate and postgraduate programs in the fields of Management, Computer Applications, 
                    and Commerce.
                </p>
                <p>
                    Located in the heart of <span class="highlight">Patna, Bihar</span>, CIMAGE is committed 
                    to developing students not just academically but also in terms of personality, leadership, 
                    and practical skills. Our highly qualified faculty members bring decades of academic and 
                    industry experience to the classroom.
                </p>
                <p>
                    Our college mission is to impart quality professional education and higher moral ethics 
                    to develop skilled and innovative graduates who are ready to face the challenges of the 
                    modern world with full confidence.
                </p>
            </div>

            <!-- Event Section -->
            <div class="event-card">
                <h2>🎉 About This Event</h2>
                <p>
                    <span style="color:#00d4ff; font-weight:bold;">Event</span> is the annual cultural 
                    and technical fest of CIMAGE Professional College, Patna. It is one of the most awaited 
                    events of the year where students from various colleges across Bihar come together to 
                    showcase their talents and skills.
                </p>
                <p>
                    The fest is organized every year by the students and faculty of CIMAGE, with the aim 
                    of providing a platform for students to explore their potential beyond academics. 
                    From technical competitions to cultural performances, Satyam200k has something 
                    exciting for everyone!
                </p>
                <p>
                    This year, E-vent Hub is being held in <span style="color:#00d4ff; font-weight:bold;">
                    June 2027</span> and we welcome all students to participate and make it a grand success!
                </p>
            </div>

            <!-- Event Categories -->
            <div class="about-section">
                <h2>🏆 Event Categories</h2>
                <p>E-vent Hub features 4 exciting event categories:</p>
                <br>

                <div class="category-box">
                    <h4>💻 Technical Events</h4>
                    <p>Cryptohunt, Search-it, Technical Quiz, Competitive Coding — Test your technical knowledge and programming skills!</p>
                </div>

                <div class="category-box">
                    <h4>🎮 Gaming Events</h4>
                    <p>PUBG, Counter-Strike, Free Fire — Compete with the best gamers and win exciting prizes!</p>
                </div>

                <div class="category-box">
                    <h4>🎭 On-Stage Events</h4>
                    <p>Fashion Show, Dance, Singing, CIMAGE Idol — Showcase your talent on the grand stage!</p>
                </div>

                <div class="category-box">
                    <h4>🎨 Off-Stage Events</h4>
                    <p>Cooking Without Fire, Short Movie, Mehandi, Rangoli — Express your creativity!</p>
                </div>
            </div>

            <!-- Vision Mission -->
            <div class="about-section">
                <h2>🎯 Our Vision & Mission</h2>
                <p>
                    <strong>Vision:</strong> To create a platform where every student can discover their 
                    true potential and develop skills that go beyond the classroom.
                </p>
                <p>
                    <strong>Mission:</strong> To organize a world-class college fest that promotes 
                    technical excellence, cultural diversity, and healthy competition among students 
                    from all backgrounds.
                </p>
                <p>
                    We believe that participation in events like Satyam200k helps students build 
                    confidence, teamwork, leadership skills and creates memories that last a lifetime! 🏆
                </p>
            </div>

        </div>
    </div>
    <br><br>
    <?php require 'utils/footer.php'; ?>
</body>
</html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Admin Panel</title>
    <style>
    .bgImage {
        background-image: url(images/homepageadmin.jpg);
        background-size: cover;
        background-position: center center;
        height: 500px;
        margin-bottom: 29px;
        position: relative;
    }

    /* Dark overlay */
    .bgImage::before {
        content: "";
        position: absolute;
        top: 0; left: 0;
        width: 100%; height: 100%;
        background: rgba(0, 0, 0, 0.6);
        z-index: 0;
    }

    .bgImage > * {
        position: relative;
        z-index: 1;
    }

    /* Navbar */
    header nav.navbar {
        background: transparent !important;
        border: none !important;
    }

    .navbar-brand {
        color: #00d4ff !important;
        font-size: 22px !important;
        font-weight: 800 !important;
        letter-spacing: 2px !important;
        text-shadow: 0 0 10px rgba(0,212,255,0.7) !important;
    }

    /* Jumbotron - LEFT aligned */
    .jumbotron {
        background-color: transparent !important;
        text-align: left !important;
        margin-top: 40px;
        padding-left: 20px;
    }

    .jumbotron h1 {
        color: #ffffff !important;
        -webkit-text-fill-color: #ffffff !important;
        font-size: 48px !important;
        text-shadow: 2px 2px 10px rgba(0,0,0,0.9) !important;
    }

    .jumbotron h1 strong {
        color: #00d4ff !important;
        -webkit-text-fill-color: #00d4ff !important;
        text-shadow: 0 0 20px rgba(0,212,255,0.9) !important;
        animation: glow 2s ease-in-out infinite alternate;
        display: inline-block;
    }

    .jumbotron p {
        color: #cccccc !important;
        -webkit-text-fill-color: #cccccc !important;
        font-size: 16px !important;
    }

    /* Left border decoration */
    .jumbotron {
        border-left: 5px solid #00d4ff;
        padding-left: 25px !important;
    }

    @keyframes glow {
        from { text-shadow: 0 0 10px #00d4ff, 0 0 20px #00d4ff; }
        to   { text-shadow: 0 0 25px #00d4ff, 0 0 50px #0099cc; }
    }
    </style>
</head>

<?php require 'utils/styles.php'; ?>

<header class="bgImage">
    <nav class="navbar">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand">⚙️ Admin Panel</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="adminPage.php"><strong>Home</strong></a></li>
                <li><a href="Stu_details.php"><strong>Student Details</strong></a></li>
                <li><a href="Stu_cordinator.php"><strong>Student Co-ordinator</strong></a></li>
                <li><a href="Staff_cordinator.php"><strong>Staff-Co-ordinator</strong></a></li>
                <li class="btnlogout"><a class="btn btn-default navbar-btn" href="index.php">Logout <span class="glyphicon glyphicon-log-out"></span></a></li>
            </ul>
        </div>
    </nav>
    <div class="col-md-12">
        <div class="container">
            <div class="jumbotron">
                <h1><strong>⚙️ Admin Panel</strong></h1>
                <h1>Manage All Events Here</h1>
                <p>Control events, coordinators and student data from here!</p>
            </div>
        </div>
    </div>
</header>
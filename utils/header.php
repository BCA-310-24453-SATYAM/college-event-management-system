<title>Event Hub</title>
<style>
.bgImage {
    background-image: url(images/college-fest.jpg);
    background-size: cover;
    background-position: center center;
    height: 650px;
    margin-bottom: 25px;
    position: relative;
}

/* Dark overlay taaki text clearly dikhe */
.bgImage::before {
    content: "";
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: rgba(0, 0, 0, 0.55);
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
    box-shadow: none !important;
}

.navbar-brand h2 {
    color: #00d4ff !important;
    font-weight: 800;
    letter-spacing: 2px;
    text-shadow: 0 0 10px rgba(0,212,255,0.7);
}

/* Jumbotron text */
.jumbotron {
    background-color: transparent !important;
    text-align: center;
    margin-top: 60px;
}

.jumbotron h1 {
    color: #ffffff !important;
    -webkit-text-fill-color: #ffffff !important;
    font-size: 52px !important;
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
    color: #ffffff !important;
    -webkit-text-fill-color: #ffffff !important;
    font-size: 16px !important;
    text-shadow: 1px 1px 5px rgba(0,0,0,0.9) !important;
}

@keyframes glow {
    from { text-shadow: 0 0 10px #00d4ff, 0 0 20px #00d4ff; }
    to   { text-shadow: 0 0 25px #00d4ff, 0 0 50px #0099cc, 0 0 70px #0099cc; }
}
</style>

<header class="bgImage">
    <nav class="navbar">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand">
                    <h2>Event Hub</h2>
                </a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php"><strong>Home</strong></a></li>
                <li><a href="register.php"><strong>Register</strong></a></li>
                <li><a href="contact.php"><strong>Contact Us</strong></a></li>
                <li><a href="aboutus.php"><strong>About us</strong></a></li>
                <li class="btnlogout"><a class="btn btn-default navbar-btn" href="login_form.php">Login <span class="glyphicon glyphicon-log-in"></span></a></li>
            </ul>
        </div>
    </nav>
    <div class="col-md-12">
        <div class="container">
            <div class="jumbotron">
                <h1><strong>🎉 Join the Excitement!<br></strong> CIMAGE's Biggest Fest is Here</h1>
                <p>"Participate in Technical, Gaming, Cultural & Off-Stage Events — Show your talent and make memories that last a lifetime! 🏆"</p>
            </div>
        </div>
    </div>
</header>
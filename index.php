<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>News about all</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
    <header>
        <div id="logo">
            <a class="headerButton" href="/" title="go to main page"><span>N</span>ews</a>
        </div>
        <div id="menuHead">
            <a href="about.php">
                <div class="headerButton" style="margin-right: 5%">About us</div>
            </a>
            <a href="feedback.php">
                <div class="headerButton">Feedback</div>
            </a>
        </div>
        <div id="regAuth">
            <a href="reg.php">Sign up</a> | <a href="auth.php">Sign in</a>
        </div>
    </header>

    <div id="wrapper">
        <div id="leftCol">

        </div>
        <div id="rightCol">
            <div class="banner">
                <img src="img/banner_1.jpg" alt="Banner 1" title="Banner 1">
            </div>
            <div class="banner">
                <img src="img/banner_2.jpg" alt="Banner 1" title="Banner 1">
            </div>
        </div>
    </div>

    <footer>
        <div id="social">
           <a href="http://vk.com/" target="_blank">
               <img src="img/icons/vk.png" alt="Вк" title="Вк">
           </a>
            <a href="http://gmail.com/" target="_blank">
               <img src="img/icons/gmail.png" alt="gmail" title="gmail">
           </a>
            <a href="http://facebook.com/" target="_blank">
               <img src="img/icons/facebook.png" alt="facebook" title="facebook">
           </a>
        </div>
        <div id="rights">All rights defend &copy; <?=date('Y'); ?></div>
    </footer>
</body>
</html>
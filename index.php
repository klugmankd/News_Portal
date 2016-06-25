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
            <a class="buttonAnimate" href="/" title="go to main page"><span>N</span>ews</a>
        </div>
        <div id="menuHead">
            <a href="about.php">
                <div class="buttonAnimate" style="margin-right: 5%">About us</div>
            </a>
            <a href="feedback.php">
                <div class="buttonAnimate">Feedback</div>
            </a>
        </div>
        <div id="regAuth">
            <a href="reg.php">Sign up</a> | <a href="auth.php">Sign in</a>
        </div>
    </header>

    <div id="wrapper">
        <div id="leftCol">
            <div id="bigArticle">
                <img src="img/articles/article_1.jpg" alt="article 1" title="article 1">
                <h2>Article 1</h2>
                <p>
                    Ipsum Lorem - a tekst- "fish" that is used in printing and design. Lorem Ipsum is actually standard "fish" until the XVI century, when an unknown printer took a galley of font and made ​​a selection of her designs fonts.
                </p>
                <a href="/article.php">
                    <div class="buttonAnimate">More</div>
                </a>
            </div>
            <div class="clear"><br></div>
            <div class="article">
                <img src="img/articles/article_2.jpg" alt="article 1" title="article 1">
                <h2>Article 1</h2>
                <p>
                    Ipsum Lorem - a tekst- "fish" that is used in printing and design. Lorem Ipsum is actually standard "fish" until the XVI century, when an unknown printer took a galley of font and made ​​a selection of her designs fonts.
                </p>
                <a href="/article.php">
                    <div class="buttonAnimate">More</div>
                </a>
            </div>
            <div class="article">
                <img src="img/articles/article_3.jpg" alt="article 1" title="article 1">
                <h2>Article 1</h2>
                <p>
                    Ipsum Lorem - a tekst- "fish" that is used in printing and design. Lorem Ipsum is actually standard "fish" until the XVI century, when an unknown printer took a galley of font and made ​​a selection of her designs fonts.
                </p>
                <a href="/article.php">
                    <div class="buttonAnimate">More</div>
                </a>
            </div>
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
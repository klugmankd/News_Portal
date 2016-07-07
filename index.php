<!doctype html>
<html>
<head>
    <?php
        define(TITLE, "News about everything");
        include_once ("views/head.php");
    ?>
</head>
<body>
    <?php include_once ("views/header.php")?>
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
        <?php include_once ("views/rightCol.php")?>
    </div>
    <?php include_once ("views/footer.php")?>
</body>
</html>
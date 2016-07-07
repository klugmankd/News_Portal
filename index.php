<!doctype html>
<html>
<head>
    <?php
        include_once ("models/dataModel.php");
        define(TITLE, "News about everything");
        include_once ("views/head.php");
        $news = getNews(3);
    ?>
</head>
<body>
    <?php include_once ("views/header.php")?>
    <div id="wrapper">
        <div id="leftCol">
            <?php
                for ($i = 0; $i < count($news); $i++) {
                    if ($i == 0) {
                        echo "<div id='bigArticle'>";
                    } else echo "<div class='article'>";
            ?>
            <img src="img/articles/article_<?=$news[$i]['id']?>.jpg" alt="article<?=$news[$i]['id']?>" title="article <?=$news[$i]['id']?>">
                    <h2><?=$news[$i]['title']?></h2>
                    <p><?=$news[$i]['intro_text']?></p>
                    <a href="article.php?id=<?=$news[$i]['id']?>">
                        <div class="buttonAnimate">More</div>
                    </a>
                    </div>
            <?php
                if ($i == 0) {?>
                   <div class="clear"><br></div>
            <?php }
                }
            ?>
        </div>
        <?php include_once ("views/rightCol.php")?>
    </div>
    <?php include_once ("views/footer.php")?>
</body>
</html>
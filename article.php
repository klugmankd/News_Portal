<!doctype html>
<html>
<head>
    <?php
        include_once ("models/dataModel.php");
        $news = getNews(1, $_GET['id']);
        define(TITLE, $news['title']);
        include_once ("views/head.php");
    ?>
</head>
<body>
    <?php include_once ("views/header.php")?>
    <div id="wrapper">
        <div id="leftCol">
            <div id='bigArticle'>
                <img src="img/articles/article_<?=$news['id']?>.jpg" alt="article<?=$news['id']?>" title="article <?=$news['id']?>">
                <h2><?=$news['title']?></h2>
                <p><?=$news['full_text']?></p>
            </div>
        </div>
    <?php include_once ("views/rightCol.php")?>
    </div>
    <?php include_once ("views/footer.php")?>
</body>
</html>
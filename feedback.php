<!doctype html>
<html>
<head>
    <?php
    define(TITLE, "Feedback");
    include_once ("views/head.php");
    ?>
</head>
<body>
<?php include_once ("views/header.php")?>
<div id="wrapper">
    <div id="leftCol">
        <input type="text" class="buttonAnimate" placeholder="Name" id="name" name="name">
        <input type="text" class="buttonAnimate" placeholder="Email" id="email" name="email">
        <input type="text" class="buttonAnimate" placeholder="Subject" id="subject" name="subject">
        <textarea name="message" id="message" class="buttonAnimate" placeholder="message"></textarea><br>
        <input type="button" name="done" id="done" class="buttonAnimate" value="Send">
    </div>
    <?php include_once ("views/rightCol.php")?>
</div>
<?php include_once ("views/footer.php")?>
</body>
</html>
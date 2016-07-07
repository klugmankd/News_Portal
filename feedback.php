<!doctype html>
<html>
<head>
    <?php
        define(TITLE, "Feedback");
        include_once ("views/head.php");
    ?>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
           $("#done").click(function () {
               $("#messageShow").hide();
               var name = $("#name").val();
               var email = $("#email").val();
               var subject = $("#subject").val();
               var message = $("#message").val();
               var fail = "";

               if (name.length < 3) fail = "Name must don't few three letters";
               else if (email.split('@').length-1 == 0 || email.split('.').length == 0)
                   fail = "You write no correct email";
               else if (subject.length < 5)
                   fail = "Subject of message must don't few five letters";
               else if (message.length < 20)
                   fail = "Subject of message must don't few twenty letters";
               if (fail != "") {
                   $("#messageShow").html(fail + "<div class='clear'><br></div>");
                   $("#messageShow").show();
                   return false;
               }
               $.ajax({
                   url: "controllers/feedbackController.php",
                   type: "get",
                   cache: false,
                   data: {'name': name, 'email': email, 'subject': subject, 'message': message},
                   dataType: 'html',
                   success: function (data) {
                           $("#messageShow").html(data + "<div class='clear'><br></div>");
                           $("#messageShow").show();
                   }
               });
           });
        });
    </script>
</head>
<body>
<?php include_once ("views/header.php")?>
<div id="wrapper">
    <div id="leftCol">
        <input type="text" class="buttonAnimate" placeholder="Name" id="name" name="name">
        <input type="text" class="buttonAnimate" placeholder="Email" id="email" name="email">
        <input type="text" class="buttonAnimate" placeholder="Subject" id="subject" name="subject">
        <textarea name="message" id="message" class="buttonAnimate" placeholder="message"></textarea><br>
        <div id="messageShow"></div>
        <input type="button" name="done" id="done" class="buttonAnimate" value="Send">
    </div>
    <?php include_once ("views/rightCol.php")?>
</div>
<?php include_once ("views/footer.php")?>
</body>
</html>
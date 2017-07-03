<?php


  $to      = 'info@napal.co, napalsounds@gmail.com, castiarena@gmail.com';
  $subject = $_POST["user-name"] . ' desde la Web : '. $_POST["user-subject"];
  $message = "<br>";
    $message.= "<strong>";
      $message.= 'Email: ';
    $message.= "</strong>";
      $message.= "<a href='mailto:".$_POST["user-email"]."'>" .
      $message.= $_POST["user-email"];
      $message.= "</a>"
  $message .= "<br>";
    $message.= "<strong>";
      $message.= 'Mensaje: ';
    $message.= "</strong>";
      $message.= $_POST["user-message"];
  $message.= "<br>";
  $headers = 'From: '.$_POST["user-email"]. "\r\n" .
    'Reply-To: '.$_POST["user-email"] . "\r\n" .
    'X-Mailer: PHP/' . phpversion(). "\r\n" .
    "Content-Type: text/html; charset=ISO-8859-1"."\r\n";


  mail($to, $subject, $message, $headers);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  	<meta name="description" content="wiredwiki App"><meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1"><!-- Latest compiled and minified CSS -->
  	<link crossorigin="anonymous" href="../css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" rel="stylesheet" /><!-- Optional theme -->
  	<link crossorigin="anonymous" href="../css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" rel="stylesheet" />
  	<link href="https://fonts.googleapis.com/css?family=Anton|Raleway" rel="stylesheet" />
    <title>Napal - Contacto</title>
    <style media="screen">
      .centradito{
        position: absolute;
        left: 50%;
        top: 50%;
        width: 320px;
        height: 80px;

        margin-left: -160px;
        margin-top: -40px;

      }
    </style>
  </head>
  <body>
    <h1 class="centradito">Enviando email<span id="dots">.</span></h1>
  </body>
  <script type="text/javascript">
    (function(win, doc){
      'use strict';

      var dots = document.getElementById('dots'),
          timer = setInterval(function(){
            if(dots.innerHTML.length < 3) {
               dots.innerHTML+= '.';
             }else{
               dots.innerHTML = '.';
             }
          },100);

      setTimeout(function(){
        window.location.href = '../';
      }, 2000);

    }(document, window))
  </script>
</html>

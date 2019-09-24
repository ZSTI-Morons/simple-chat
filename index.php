<?php session_start(); if (empty($_SESSION)) header("Location: sign-in"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <title>Simple Chat</title>
  </head>
  <body id="main">
    <div class="settings-container">
      <i class="fas fa-user-cog"></i>
    </div>
    <main>
      <div class="messages-container">
<!--        <div class="message">Hello, guys! What's up?</div>-->
      </div>
      <input id="message-input" type="text" placeholder="Type your message here...">
    </main>
     <script src="js/chat.js"></script> 
  </body>
</html>

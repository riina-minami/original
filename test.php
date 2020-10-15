        <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUSICBOX</title>
    <link rel="stylesheet" href="simple.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a0f5cf51b1.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <h1>こんにちわ</h1>
  </body>
</html>

<?php
session_start();
$dsn = 'mysql:dbname=tb220242db;host=localhost';
$user = 'tb-220242';
$password = 'N95N7ba6UV';
$dbh = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

?>
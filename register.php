<?php 
    if(isset($_GET['code'])) { $authentication_code = $_GET['code']; }

    setcookie($authentication_code,0);
    header('location: vote.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>記録中-彩西祭2023</title>
    </head>
    <body>

    </body>
</html>
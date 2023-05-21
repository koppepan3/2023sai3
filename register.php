<?php 
    if(isset($_GET['code'])) { $group_code = $_GET['code']; }
    setcookie($group_code,1);
    include "translate.php";
    $group = translate($group_code);
    header('location: register_confirm.php?entered='.$group);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>記録中-彩西祭2023</title>
    </head>
    <body>
        <p>入場を記録しています。<br>画面が切り替わらない場合は<a href="register_confirm.php?entered=<?php echo $group; ?>">こちら</a>から移動してください</p>
    </body>
</html>
<!doctype html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="jump.php" method="post">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="female2">Female
    <input type="radio" name="gender2" value="male">Male
    <input type="radio" name="gender2" value="male2">Male


    <input type="submit">
    Comment: <textarea name="comment" rows="5" cols="40"></textarea>
</form>

<?php
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


if (empty($_GET['A1']))
    echo "no Al";
else
    echo $_GET['A1'];
?>
</body>
</html>
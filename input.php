<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <meta charset="UTF-8">
    <title>connectMySQL</title>
</head>
<body>
<h1>MySQL</h1>
<?php
include 'input_link.php';

echo "this is PHP echo";

$dbLink = connectSQL(); //連接資料庫
if ($dbLink->connect_error) {
    // die :關掉PHP並且印出字串,  ""."" 用點連接字串
    die("link error!!!".$dbLink->connect_error);
    //die("link error!!!".mysqli_connect_error());  //程序導向.效果同
} else {
    echo "<br>link success!!!!";
}

getFromUrl($dbLink);
readOne($dbLink);

//printStars();

$dbLink->close();  // 關閉資料庫
?>

</body>
</html>
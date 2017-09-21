<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>connectMySQL</title>
</head>
<body>
    <h1>MySQL</h1>
    <?php
        echo "this is PHP echo";
        $host = "127.0.0.1"; // 變數宣告
        $user = "homestead";
        $password = "secret";
        $dbLink = new mysqli($host, $user, $password); //連接資料庫
        if ($dbLink->connect_error) {
            die("link error!!!".$dbLink->connect_error);
            // die :關掉PHP並且印出字串,  ""."" 用點連接字串
        } else {
            echo "<br>link success<br>!!!!";
        }
    ?>

</body>
</html>
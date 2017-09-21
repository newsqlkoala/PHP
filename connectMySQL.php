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
        $database = "test"; // 先前手動建立
        $dbLink = new mysqli($host, $user, $password, $database); //連接資料庫
        if ($dbLink->connect_error) {
            // die :關掉PHP並且印出字串,  ""."" 用點連接字串
            die("link error!!!".$dbLink->connect_error);
            //die("link error!!!".mysqli_connect_error());  //程序導向.效果同
        } else {
            echo "<br>link success!!!!";
        }

        //新增
        $sql = "INSERT INTO students VALUES('James', 'F', 'Orchid island')";

        if ($dbLink->query($sql))   echo "add OK";
        else                        echo "add NG".$sql."<br>".$dbLink->error;

        //讀取
        $sql = "SELECT * FROM students";
        $result = $dbLink->query($sql);

        var_dump($result);  // 網頁上列出物件
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_array()) {
                echo "<br>Name: ".$row["name"]." Gender: ".$row["gender"]." Addr: ".$row["addr"];
            }
        } else {
            echo "no data !!";
        }

        $dbLink->close();  // 關閉資料庫
    ?>

</body>
</html>
<?php

function connectSQL()
{
    $host = "127.0.0.1"; // 變數宣告
    $user = "homestead";
    $password = "secret";
    $database = "test"; // 先前手動建立
    $dbLink = new mysqli($host, $user, $password, $database); //連接資料庫

    return $dbLink;
}

function getFromUrl($dbLink) {
    // 新增 (從url得到參數), http://homestead.app/input.php?NAME=Bear&GENDER=M&ADDR=Taipei

    if (empty($_GET["NAME"])) {
        echo "<br>No URL parameters ???";
        return;
    }
    $name_url = $_GET["NAME"];
    $gender_url = $_GET["GENDER"];
    $addr_url = $_GET["ADDR"];

//新增
    $sql = "INSERT INTO students VALUES('$name_url', '$gender_url', '$addr_url')";

    if ($dbLink->query($sql))   echo "add OK";
    else                        echo "add NG".$sql."<br>".$dbLink->error;
}

function readOne($dbLink) {
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
}

function printStars() {
    $max = 5;

    for($i = 0 ; $i< $max; $i++)
    {
        for($j = 0;$j <= $i; $j++) echo "*";
        echo "<br>";
    }
    echo "--------<br>";
    for($i = 0 ; $i< $max; $i++)
    {
        for($j = 0;$j < ($max - $i); $j++) echo "*";
        echo "<br>";
    }
    echo "--------<br>";
    for($i = 0 ; $i< $max; $i++)
    {
        for($j = 0;$j < ($max - $i - 1); $j++) echo "&nbsp&nbsp";
        for($j = 0;$j <= $i; $j++) echo "*";
        echo "<br>";
    }
    echo "--------<br>";
    for($i = 0 ; $i< $max; $i++)
    {
        for($j = 0;$j < $i; $j++) echo "&nbsp&nbsp";
        for($j = 0;$j <= ($max - $i - 1); $j++) echo "*";
        echo "<br>";
    }
    echo "--------<br>";
    for($i = 0 ; $i< $max; $i++)
    {
        for($j = 0;$j < ($max - $i - 1); $j++) echo "&nbsp";
        for($j = 0;$j <= $i; $j++) echo "*";
        echo "<br>";
    }
}
?>
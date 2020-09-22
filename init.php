<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "course";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

$aa = 1;
$bb=array(" ","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T");
while($aa<21){
$sql = "INSERT INTO favouritecourse (id,name,score1,score2,score3,score4,votenum)
VALUES ('$aa','$bb[$aa]','3','3','3','3','1')";

if ($conn->query($sql) === TRUE) {
    echo "新记录插入成功"."<br>";
}
else echo "插入失败请重试";
$aa=$aa+1;
}

echo "back to <a href=\"http://localhost/coursedata/index.html\">返回首页</a>"."<br>";

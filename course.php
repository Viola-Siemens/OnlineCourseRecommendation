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

$aa = $_POST["id"];
// $bb = $_POST["name"];
$cc = $_POST["score1"];
$dd = $_POST["score2"];
$ee = $_POST["score3"];
$ff = $_POST["score4"];


$sql="UPDATE favouritecourse SET votenum=votenum+1 where id='{$aa}'";

if ($conn->query($sql) === TRUE) {
    echo "votenum修改成功,访问数加一"."<br>";
}
else echo "提交失败请重试，未访问成功";

$sql2="UPDATE favouritecourse SET score1=(score1*(votenum-1)+'{$cc}')/votenum, score2=(score2*(votenum-1)+'{$dd}')/votenum, score3=(score3*(votenum-1)+'{$ee}')/votenum, score4=(score4*(votenum-1)+'{$ff}')/votenum where id='{$aa}'";

if ($conn->query($sql2) === TRUE) {
    echo "平均分数修改成功"."<br>";
}
else echo "提交失败请重试";





echo "back to <a href=\"http://localhost/coursedata/index.html\">返回首页</a>"."<br>";

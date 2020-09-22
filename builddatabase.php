<?php
$servername = "localhost";
$username = "root";
$password = "root";

// 创建连接
$conn = new mysqli($servername, $username, $password);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

// 创建数据库
$sql = "CREATE DATABASE course";
if ($conn->query($sql) === TRUE) {
    echo "数据库创建成功";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>


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

// 使用 sql 创建数据表
$sql = "CREATE TABLE favouritecourse (
      id INT(6) UNSIGNED PRIMARY KEY,
      name VARCHAR(30) NOT NULL,
      score1 Float(6) NOT NULL,
      score2 Float(6) NOT NULL,
      score3 Float(6) NOT NULL,
      score4 Float(6) NOT NULL,
      votenum INT(6),
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table favouritecourse created successfully";
} else {
    echo "创建数据表错误: " . $conn->error;
}
$conn->close();
?>

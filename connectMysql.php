<?php
function connectMysql()
{
    $servername = "localhost";
    $username = "root";
    $password = "123456";
    $database = "dong";
    $port = 3306;
    $conn = null;
    try {
        $conn = new mysqli($servername, $username, $password, $database, $port);
        echo "连接成功" . "<br>";
    } catch (Exception $e) {
        die("连接失败: " . $e . "<br>");
    }
    return $conn;
}

function createUserTable()
{
    $conn = connectMysql();
    if ($conn == null) {
        return;
    }

    // 使用 sql 创建数据表
    $sql = "CREATE TABLE users (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
            nickName VARCHAR(30) NOT NULL,
            email VARCHAR(50),
            tick INT(10)
        )";

    if (mysqli_query($conn, $sql)) {
        echo "数据表 User 创建成功" . "<br>";
    } else {
        echo "数据表 User 已存在" . "<br>";
    }
    mysqli_close($conn);
}

function InsertUserTable()
{
    $conn = connectMysql();
    if ($conn == null) {
        return;
    }

    $sql = "INSERT INTO users (nickName, email, tick)
        VALUES ('dong', '9312085@qq.com',1620820143)";

    // 多条数据用mysqli_multi_query
    if ($conn->query($sql) === TRUE) {
        echo "新记录插入成功" . "<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    mysqli_close($conn);
}

function SelectUserTable()
{
    $conn = connectMysql();
    if ($conn == null) {
        return;
    }

    $sql = "SELECT id, nickName, email FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // 输出数据
        while ($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"] . " - nickName: " . $row["nickName"] . "<br>";
        }
    } else {
        echo "0 结果" . "<br>";
    }
    mysqli_close($conn);
}

function UpdateUserTable()
{
    $conn = connectMysql();
    if ($conn == null) {
        return;
    }

    $sql = "UPDATE users SET nickName='rong'
    WHERE id = 1";
    if (mysqli_query($conn, $sql)) {
        echo "数据表 User 更新成功" . "<br>";
    } else {
        echo "数据表 User 更新失败" . "<br>";
    }
    mysqli_close($conn);
}

function DeleteUserTable()
{
    $conn = connectMysql();
    if ($conn == null) {
        return;
    }

    $sql = "Delete From users WHERE id = 1";

    if (mysqli_query($conn, $sql)) {
        echo "数据表 User 删除成功" . "<br>";
    } else {
        echo "数据表 User 删除失败" . "<br>";
    }
    mysqli_close($conn);
}

?>
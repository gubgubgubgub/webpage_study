<?php
$servername = "localhost";
$username = "Liam";
$password = "rudwns5398";
$dbname = "hi";

$conn = new mysqli_connect($servername, $username, $password, $dbname);
// 오류 확인
ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$ID = $_POST['ID'];
$password = $_POST['password'];

$sql = "SELECT * FROM exam WHERE identification = ?"; // "exam" 테이블을 사용하고 "id" 컬럼을 사용한다고 가정
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $ID);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) { // "password" 컬럼을 사용한다고 가정
        echo 'success';
    } else {
        echo 'fail';
    }
} else {
    echo 'fail';
}

$stmt->close();
$conn->close();
?>

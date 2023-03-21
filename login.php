<?php
$servername = "localhost";
$username = "Liam";
$password = "rudwns5398";
$dbname = "hi";

$conn = new mysqli($servername, $username, $password, $dbname);
// 오류 확인
ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$ID = $_POST['ID'];
$password = $_POST[ 'password'];

// 확인을위한 코드
echo "Client ID: " . $ID . "\n";
echo "Client Password: " . $password . "\n";

$sql = "SELECT * FROM exam WHERE identification = ?"; 
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $ID);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // 확인을위한 코드
    echo "Database ID: " . $row['identification'] . "\n";
    echo "Database Password: " . $row['password'] . "\n";

    if (password_verify($password, $row['password'])) { 
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

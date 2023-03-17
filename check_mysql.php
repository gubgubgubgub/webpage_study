<!-- <?php
  $jb_connect = mysqli_connect( 'localhost', 'root', 'rudwns5398', 'employees' );
  var_dump( $jb_connect );
?> -->

<?php
$servername = "localhost";
$username = "Liam";
$password = "password";
$dbname = "mydb";

// 연결 생성
$conn = mysqli_connect($servername, $username, $password, $dbname);

// 연결 확인
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>

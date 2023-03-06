<?php
# form 데이터 읽어오기
$id = $_POST["ID"];
$pw = $_POST["PW"];
$name = $_POST["name"];
$bir_yy = $_POST["bir_yy"];
$bir_mm = $_POST["bir_mm"];
$bir_dd = $_POST["bir_dd"];
$sex = $_POST["sex"];
$email= $_POST["email"];


echo "<h3>ID는: {$id}, PW는: {$pw}, name는: {$name}  </h3>";

# insert sql 작성
$sql = "INSERT INTO signup_data (ID, PW, name) VALUES('$id', '$pw', '$name')";

if($conn->query($sql))echo "<h3>정보 등록 성공</h3>";
else echo "<h3>도서등록 실패</h3>";
?>

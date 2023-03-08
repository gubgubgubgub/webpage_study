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
$con = mysqli_connect("localhost","Liam","rudwns5398","hi") or die ("Can't access DB");
$query = "INSERT INTO exam (identification, name, password, date, sex, email) VALUES('$id', '$name', '$pw', 'wait', '$sex', '$email')";
$resut=mysqli_query($con,$query);

echo "<h3>ID는: {$id}, PW는: {$pw}, name는: {$name}  </h3>";

if(!$result) 
{?>
    <script> alert('회원가입이 완료되었습니다.'); location.href="/first_page.html"; </script> 
<?php
} else {?>
    <script> alert('회원가입에 실패했습니다.\n다시 시도해 주세요.'); location.href="/sign_up_page.html"; </script>
<?php } ?>


?>

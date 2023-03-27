<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $conn = mysqli_connect("localhost","Liam","rudwns5398","notic_table");

    // 연결 오류 발생 시 오류 메시지 출력
    if (mysqli_connect_errno($conn)) {
      die("Failed to connect to MySQL: " . mysqli_connect_error());
    }
  
    // POST 요청으로 전달된 데이터를 변수에 저장
    $title = $_POST["title"];
    $content = $_POST["content"];
    $writer = $_POST["author"];
    $date = $_POST["createdAt"];
  
    // SQL 쿼리문 작성
    $sql = "INSERT INTO notice_table1 (title, content, writer, date) VALUES ('$title', '$content', '$writer', '$date')";
  
    // SQL 쿼리 실행
    if (mysqli_query($conn, $sql)) {
      echo "success";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  
    // 데이터베이스 연결 종료
    mysqli_close($conn);
  }
?>

<?php
header('Content-Type: application/json');
$conn = mysqli_connect("localhost", "Liam", "rudwns5398", "notic_table");
if (mysqli_connect_errno($conn)) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}

$sql = "SELECT id, title, content, writer, date as createdAt FROM notice_table1 ORDER BY createdAt DESC"; // 최신순으로 자져온다

$result = mysqli_query($conn, $sql);

$posts = array();
while ($row = mysqli_fetch_assoc($result)) {
    $posts[] = $row;
}

foreach ($posts as $post) { // foreach는 배열의 요소를 하나씩 순회하며 값을 가져오는 반복문 as 키워드를 사용하여 배열의 각 요소를 $post라는 변수에 할당
    echo "id: " . $post['id'] . "<br>";
    echo "title: " . $post['title'] . "<br>";
    echo "content: " . $post['content'] . "<br>";
    echo "writer: " . $post['writer'] . "<br>";
    echo "createdAt: " . $post['createdAt'] . "<br>";
}

echo json_encode($posts);
mysqli_close($conn);
?>

<?php
header('Content-Type: application/json');
$conn = mysqli_connect("localhost", "Liam", "rudwns5398", "notic_table");
if (mysqli_connect_errno($conn)) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}

$sql = "SELECT id, title, writer, date as createdAt FROM notice_table1 ORDER BY createdAt DESC";

$result = mysqli_query($conn, $sql);

$posts = array();
while ($row = mysqli_fetch_assoc($result)) {
    $posts[] = $row;
}

echo json_encode($posts);
mysqli_close($conn);
?>

<?php
$conn = mysqli_connect("localhost", "Liam", "rudwns5398", "notic_table");

if (mysqli_connect_errno($conn)) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}

$title = $_POST['title'];
$old_content = $_POST['old_content'];
$writer = $_POST['writer'];
$new_content = $_POST['new_content'];

$sql = "UPDATE notice_table1 SET content = ? WHERE title = ? AND content = ? AND writer = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $new_content, $title, $old_content, $writer);
$result = $stmt->execute();

if ($result) {
    echo "success";
} else {
    echo "failure";
}

$stmt->close();
$conn->close();
?>

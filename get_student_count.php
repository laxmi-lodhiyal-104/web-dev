<?php

$servername = "sql210.infinityfree.com";
$username   = "if0_42082882";
$password   = "EKzp3qv4FYF1c";
$dbname     = "if0_42082882_crud";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection Failed");
}

$sql = "SELECT COUNT(*) AS total FROM students";

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

echo $row['total'];

mysqli_close($conn);

?>
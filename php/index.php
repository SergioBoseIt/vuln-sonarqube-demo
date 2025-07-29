<?php
$mysqli = new mysqli("localhost", "user", "password", "testdb");

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $mysqli->query("SELECT * FROM users WHERE id = '$id'");
    while($row = $result->fetch_assoc()) {
        echo "User: " . htmlspecialchars($row['name']) . "<br>";
    }
}
?>

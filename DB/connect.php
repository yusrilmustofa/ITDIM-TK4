<?php
$servername = "localhost";
$username = "username";
$password = "password";
$database = "supplier";

try {
    $conn = new PDO("mysql:host=$localhost;dbname=$supplier", $localhost, $localhost);
    $sql = "SELECT * FROM Pengguna";
    $result = $conn->query($sql);
    foreach ($result as $row) {
        print_r($row);
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
} finally {
    $conn = null;
}
?>


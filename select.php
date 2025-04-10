<?php
require "config.php";
$result = $conn->prepare("SELECT username, password FROM aw");
$result->execute();

while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo $row['username'];
    echo $row['password'];
}


?>
<?php

$id=$_GET["id"];

$conn = new mysqli("localhost", "root", "123", "tdb");
$result = $conn->query("DELETE  from words where id=$id");
$conn->close();

header('Location: dictionary.php');
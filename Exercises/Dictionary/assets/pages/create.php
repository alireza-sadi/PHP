<?php
$w = $_POST["word"];
$t = $_POST["translation"];

$conn = new mysqli("localhost","root","123","tdb");
$result = $conn->query("INSERT INTO words values(null,'$w','$t')");
$conn->close();

header("Location: /translator/dictionary/assets/pages/dictionary.php");
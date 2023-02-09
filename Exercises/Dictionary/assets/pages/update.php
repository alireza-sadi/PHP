<?php

$id=$_POST["id"];
$w=$_POST["word"];
$tr= $_POST["translate"];

$conn = new mysqli("localhost", "root", "123", "tdb");
$result = $conn->query("UPDATE words set translation='$tr',word='$w' where id='$id'");
$conn->close();

header('Location: /translator/dictionary/assets/pages/dictionary.php');
?> 
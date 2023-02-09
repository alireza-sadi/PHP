<?php
$id=$_GET["id"];
$tr=$_GET["translation"];
$word=$_GET["word"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/translator/dictionary/assets/styles/edit.css">
    <title>Edit Word</title>
</head>
<body>
   <div class="title">
     <h1>Edit Mode</h1>
    <span>You can change word , translation or both of them!</span>
</div>
        <form action="update.php" method="POST">
            <input type="hidden" name="id" value="<?=$id?>".>
<div class="i1"><span>Word: </span>        <input type="text" name="word" value="<?=$word ?>"/></div>
<div class="i1"><span>Translation: </span>        <input type="text" name="translate" value="<?=$tr ?>"/></div>
        <input type="submit" value="save"/>
    </form>
<div class="back-buttons">        
    <a href="../../index.php" class="home">Home</a>
    <a href="/translator/dictionary/assets/pages/dictionary.php" >Dictionary List</a></div>
</body>
</html>
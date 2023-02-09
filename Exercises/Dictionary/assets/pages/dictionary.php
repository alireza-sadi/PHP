<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/translator/dictionary/assets/styles/dictionary.css">
    <title>Dictionary List</title>
</head>
<body>
    <h1>Dictioary List</h1>
     <?php
    $conn = new mysqli("localhost", "root", "123", "tdb");
    $result = $conn->query("select * from words", MYSQLI_STORE_RESULT);
    ?>
    <?php while ($record = $result->fetch_assoc()) : ?>
        <div class="items">
       <div class="word"><span>Word:    </span> <?= $record["word"] ?></div>
        <div class="translation"><span>Translation:     </span><?= $record["translation"] ?></div>
        <a href="/translator/dictionary/assets/pages/edit.php?id=<?= $record['id'] ?>&word=<?= $record['word']?>&translation=<?= $record['translation']?>" class="edit">Edit </a>
        <a href="/translator/dictionary/assets/pages/delete.php?id=<?= $record['id'] ?>" class="delete">Delete</a>
        </div>
    <?php endwhile ?>

    <?php $conn->close(); ?>

    <a href="../../index.php" class="home">Home</a>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/translator/dictionary/assets/styles/index.css">
    <title>Dictionary</title>
</head>
<body>
    <?php $id=$_GET["id"]??false ?>
    <div class="container">
        <div class="title">
            <h1>Dictionary</h1>
            <span>Welcome to the Simple Dictionary</span>
        </div>
        <div class="main-container">
            <div class="main">
            <form action="/translator/dictionary/assets/pages/create.php" method="POST">
                <input type="text" name="word" id="" placeholder="Enter word here:">
                <input type="text" name="translation" id="" placeholder="Enter translation here:">
                <input type="submit" value="Add to Dictioary">
            </form>
        </div>
        <div class="see-dicitonary">      
            <a href="/translator/dictionary/assets/pages/dictionary.php" class="see">See Dictionary</a>
        </div>
        </div>
        <div class="copyright">CopyRight@Ali.St</div>
    </div>
</body>
</html>
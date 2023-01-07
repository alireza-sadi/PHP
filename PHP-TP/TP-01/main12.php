<?php 
        $arr=[
            [
                "Title" => "Book1",
                "Price" => 2000
            ],
            [
                "Title" => "Book2",
                "Price" => 4000
            ],
            [
                "Title" => "Book3",
                "Price" => 6000
            ],
            [
                "Title" => "Book4",
                "Price" => 9000
            ],
            [
                "Title" => "Book4",
                "Price" => 9000
            ],
            [
                "Title" => "Book4",
                "Price" => 9000
            ],
            [
                "Title" => "Book4",
                "Price" => 9000
            ]
        ];
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            text-align:center;
        }
        h2{
            background-color: hotpink;
            margin-top:0;
        }
        .card{
            width:<?=100/count($arr)?>%;
            display:inline-block;

            background-color:#efefef;
            border-radius:1em;
            overflow:hidden;
        }
    </style>
</head>
<body>
    <h1>Home Page</h1>
    <hr/>

    

    <?php 
        // foreach($arr as $product){
        //     echo "<h2>" . $product["Title"] . "</h2>\n";
        //     echo "<h3>" . $product["Price"] . "</h3>\n";
        // }
    ?>

    <hr/>

    <?php foreach($arr as $product): ?>
        <div class="card">
            <h2><?=$product["Title"]?></h2>
            <h3><?=$product["Price"]?></h3>
        </div>
    <?php endforeach?>
</body>
</html>
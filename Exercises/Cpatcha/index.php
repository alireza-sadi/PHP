<?php
session_start();
function create_captcha($text)
{
    $width =  200;
    $height = 100;
    $font = "Grunge.ttf";

    $image = imagecreatetruecolor($width ,  $height);


    $white = imagecolorallocate($image , 255,255,255);
    $black = imagecolorallocate($image , 0,0,0);


    imagefill($image,   0, 0,   $white);
    imagettftext($image,    25,     rand(-3,3),   $width/8,  60,   $black,    $font,  $text);


    $warped_image = imagecreatetruecolor($width ,    $height);
    imagefill($warped_image,    0,  0,    imagecolorallocate($warped_image , 255,   255,    255));

    for ($x=0;      $x<$width;     $x++){
        for($y=0;   $y<$height;    $y++){

            $index = imagecolorat($image,   $x,    $y);
            $color_comp = imagecolorsforindex($image,   $index);

            $color = imagecolorallocate($warped_image ,     $color_comp['red'],     $color_comp['green'],    $color_comp['blue']);

            $imageX = $x;
            $imageY= $y + round(sin($x /15) * 15 );

            imagesetpixel($warped_image,    $imageX,    $imageY,    $color);

        }
    };


    $path = "captcha.jpg";
    imagejpeg($warped_image,$path);
    imagedestroy($warped_image);
    imagedestroy($image);

    return $path;
}
$filename = session_id();

if(count($_POST)>0){

    $number = file_get_contents($filename);

if ($_POST['number'] == $number)
{
    echo     "<div class='isCaptcha correct'>The captcha is Correct !!</div>";
}else{
    echo    "<div class='isCaptcha wrong'>The captcha is wrong !!</div>";
        $text = rand(10000,99999);

    $myimage = create_captcha($text);
    file_put_contents($filename,    $text);
}
}else{
    $text = rand(10000,99999);

    $myimage = create_captcha($text);
    file_put_contents($filename,    $text);
}
?>

<!DOCTYPE html>
<head>
    <title>Captcha</title>
    <style>
        *{
            box-sizing : border-box;
            margin: 0;
            padding: 0;
        }
        body{
            height: 100vh;
            display: flex;
            flex-direction : column;
            justify-content: center;
            align-items: center;
        }
        .captcha{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        img{
            margin-top: 2rem;
        }
        form{
            margin-top: 1rem;
        }
        .isCaptcha{
            padding: 1rem;
            border-radius: 15px;
            color: azure;
            font-size: 1.2rem;
        }
        .correct{
            background-color: green;
        }
        .wrong{
            background-color:red;
        }
        input[type="text"]{
            padding:.5rem;
            margin-left: .5rem;
            border: none;
            border-radius: 15px;
            background-color: grey;
            color:azure;
        }
        input[type="text"]::placeholder{
            color:azure;
        }
        input[type="submit"]{
            padding:.5rem;
            margin-left: .5rem;
            border: none;
            border-radius: 15px;
            background-color: grey;
            color:azure;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="captcha">
     <img src="captcha.jpg">
     <form action="" method="post">
        <input type="text" name="number" id="number" placeholder="Enter Captcha here ">
        <input type="submit" value="Submit">
    </form>
</div>
</body>
</html>

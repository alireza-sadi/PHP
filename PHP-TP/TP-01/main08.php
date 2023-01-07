<?php

// echo __FILE__ . "\n";
// echo dirname(__FILE__) . "\n";
// echo dirname(__FILE__) . dirname("/") . "main01.php" . "\n";

$TRUE_SIGNATURE="1498996fd0c7c2511e7b5ebe9e2926a5";

$IN=dirname(__FILE__) . dirname("/") . "main01.php";
$OT=dirname(__FILE__) . dirname("/") . "main01.txt";

$NEW_SIG =  md5_file($IN);
// 1498996fd0c7c2511e7b5ebe9e2926a5

if($TRUE_SIGNATURE === $NEW_SIG){
    echo "Trusted File\n";
}else{
    echo "Tempred File\n";
    die("Error");
}

// file_put_contents($OT, $NEW_SIG);
// $SIG_FROM_FILE=file_get_contents($OT);
// echo($SIG_FROM_FILE);
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In Page</title>
</head>
<body>
    <?php
    
    session_start();
    if(array_key_exists("LOGGED_IN",$_SESSION)&&$_SESSION["LOGGED_IN"]===true){

        echo '<form action="index.php">
         <input type="submit" value="Log Out">
         </form>';
        $_SESSION["LOGGED_IN"]=false;

            }else{

                echo '<form action="index.php">
                 <input type="submit" value="Log In">
                </form>';
                $_SESSION["LOGGED_IN"]=true;
                
            }
    ?>
</body>
</html>

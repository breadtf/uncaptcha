<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (isset($_POST["captchaInput"]) && !empty(trim($_POST["captchaInput"]))){
        session_start();
        if ($_SESSION["captchaAnswer"] == trim($_POST["captchaInput"])){
            echo "Correct!";
        } else {
            echo "Incorrect.";
        }
    }else{
        echo "Please solve the CAPTCHA.";
    }
}
?>

<form action="example.php" method="post">
    <?php
    require("captcha.php");
    ?><br>
    <input type="submit" value="OK">
</form>
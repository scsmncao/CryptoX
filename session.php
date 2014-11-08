<?php
    session_start();
    $_SESSION['userstatus'] = false;
    $_SESSION['username'] = "";
    $page = "index.php";
    if(isset($_GET["redirect_to"])){
        $file = $_GET["redirect_to"];
        if ($file == "profile.php"){
            // if redirect to is a restricted page, redirect to index
            $file = "index.php";
        }
    }
    header("Location: $file");
?>
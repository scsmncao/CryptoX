<?php

    $link = mysql_connect('localhost', 'root', 'mysql');
if (!$link) {
    die('Not connected : ' . mysql_error());
}

// make foo the current db
$db_selected = mysql_select_db('cryptox', $link);
if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}

    /*if (!get_magic_quotes_gpc()) {
      $email = addslashes($email);
    }

    $query = "INSERT INTO `divvy227db`.`emails` (`email`) VALUES ('$email')";

    $result = mysql_query($query, $db);

    if ($result) {
      echo "Thank you! You will recieve an email when the beta is ready!";
    }
    else {
      echo "An error has occurred. We could not add your email.";
    }

    mysql_close($db);*/
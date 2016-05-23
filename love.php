<?php
    include ('config.php');
    $db = new PDO("mysql:dbname=" . DB_NAME . ";host=" . DB_HOST,  DB_USER, DB_PWD);
    if ($_POST['love']=='true' || $_POST['love']=='false'){
        $love = $_POST['love']=="true";
        $statement = $db->prepare('update love set tally=tally+1 where love=?');
        $statement->bindParam(1, $love, PDO::PARAM_BOOL);
        $statement->execute();
    }
    header('Location:' . URL . 'index.php#allTheForms');

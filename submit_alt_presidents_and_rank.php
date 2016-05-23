<?php
    include('config.php');
    $dbh = new PDO("mysql:dbname=" . DB_NAME . ";host=" . DB_HOST,  DB_USER, DB_PWD);
    if (isset($_POST['president']) && strlen($_POST['president'])<256 
      && isset($_POST['rank']) && (int) $_POST['rank']>1 && (int)$_POST['rank']<45){
        $statement = $dbh->prepare('update presidents set tally=tally+1 where name=?');
        $statement->bindParam(1, $_POST['president'], PDO::PARAM_STR);
        $statement->execute();

        $statement = $dbh->prepare('update ranks set tally=tally+1 where rank=?');
        $statement->bindParam(1, $_POST['rank'], PDO::PARAM_INT);
        $statement->execute();
    }

    header('Location:'.URL . 'index.php#allTheForms');
?>

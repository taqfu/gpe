Commented this out so duplicate entries don't get created.
<?php
/*
    include ('config.php');
    $dbh = new PDO("mysql:dbname=" . DB_NAME . ";host=" . DB_HOST,  DB_USER, DB_PWD);
    for($rank=2;$rank<45;$rank++){
        $statement = $dbh->prepare("insert into ranks (rank) values (?)");
        $statement->bindParam(1, $rank, PDO::PARAM_INT);
        $statement->execute();
    }

    $file = file_get_contents("president.txt");
    $presidents = explode("\n", $file);
    foreach ($presidents as $president){
        $president = trim($president);
        $statement = $dbh->prepare('insert into presidents (name) values (?)');
        $statement ->bindParam(1, $president, PDO::PARAM_STR);
        $statement->execute();
    }    

*/

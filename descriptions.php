<?php
    include ('config.php');
?>
<html>

<head>
<meta name='keywords' content='obama, greatest president ever, greatest president'>
<meta name='description' content='A page dedicated to the greatest president ever!'>
<meta name='author' content='taqfu'>


<title>GREATEST PRESIDENT EVER</title>
</head>
<body>

<nav>
    <a href='index.php'>Home</a>
   <a href='ranks.php'>Alternative Rankings</a>
    <a href='presidents.php'>Alternative Presidents</a>
    <span style='font-weight:bold;'>Alternative Descriptions</span>
</nav>

<ol>
<?php
    if (isset($_POST['description']) && strlen($_POST['description'])<256){
        does_description_exist(trim($_POST['description'])) ? 
          increase_tally(trim($_POST['description'])) :
          create_description(trim($_POST['description']));
    }
    
    $dbh = new PDO("mysql:dbname=" . DB_NAME . ";host=" . DB_HOST,  DB_USER, DB_PWD);
    $statement = $dbh->query('select * from descriptions order by tally desc');
    while ($description = $statement->fetchObject()){
       $caption = $description->censored ? "--CENSORED--" : $description->description;
       echo "<li><samp>\"$caption\"</samp> - ($description->tally)";
    }
        
    
    

?>
</ol>
</body>
</html>
<?php 
function create_description($description){
    $dbh = new PDO("mysql:dbname=" . DB_NAME . ";host=" . DB_HOST,  DB_USER, DB_PWD);
    $statement = $dbh->prepare("insert into descriptions (description) values (?)");
    $statement->bindParam(1, $description, PDO::PARAM_STR);
    $statement->execute();
    echo "<code>Description created.</code>";
}
function does_description_exist($description){
    $dbh = new PDO("mysql:dbname=" . DB_NAME . ";host=" . DB_HOST,  DB_USER, DB_PWD);
    $statement = $dbh->prepare('select count(*) from descriptions where description=?');
    $statement->bindParam(1, $description, PDO::PARAM_STR);
    $statement->execute();
    return ((int)$statement->fetchColumn()>0);
}
function increase_tally($description){
    $dbh = new PDO("mysql:dbname=" . DB_NAME . ";host=" . DB_HOST,  DB_USER, DB_PWD);
    $statement = $dbh->prepare('update descriptions set tally=tally+1 where description=?');
    $statement->bindParam(1, $description, PDO::PARAM_STR);
    $statement->execute();
    echo "<code>Description updated.</code>";
    
}

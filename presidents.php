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
    <span style='font-weight:bold;'>Alternative Presidents</span>
    <a href='descriptions.php'>Alternative Descriptions</a>
</nav>
<h1 style='text-align:center;'>
    Alternative Greatest President Ever Results
</h1>
<ul>
<?php
    include('config.php');
    $db = new PDO("mysql:dbname=" . DB_NAME . ";host=" . DB_HOST,  DB_USER, DB_PWD);
    $statement = $db->query('select sum(tally) from presidents order by tally desc');
    $total = (int) $statement->fetchColumn();
   
    $statement = $db->query('select * from presidents');
    while ($president = $statement->fetchObject()){
        $percent = $president->tally>0 ? ($president->tally/$total)*100 : 0;
        if ($percent!=0){
            echo "<li>$president->name ($percent%) </li>";
        }
    }
    
?>
</ul>
</body>
</html>

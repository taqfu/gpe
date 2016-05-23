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
    <span style='font-weight:bold;'>Alternative Rankings</span>
    <a href='presidents.php'>Alternative Presidents</a>
    <a href='descriptions.php'>Alternative Descriptions</a>
</nav>
<h1 style='text-align:center;'>
    Alternative Rankings Results For Obama 
</h1>
<ul>
<?php
    include('config.php');
    $db = new PDO("mysql:dbname=" . DB_NAME . ";host=" . DB_HOST,  DB_USER, DB_PWD);
    $statement = $db->query('select sum(tally) from ranks order by tally desc');
    $total = (int) $statement->fetchColumn();
   
    $statement = $db->query('select * from ranks');
    while ($rank = $statement->fetchObject()){
        $percent = $rank->tally>0 ? ($rank->tally/$total)*100 : 0;
        if ($percent!=0){
            echo "<li>#$rank->rank ($percent%) </li>";
        }
    }
    
?>
</ul>
</body>
</html>

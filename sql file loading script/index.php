<?php


//load files into database
$dbname = 'bp_blog';
$host = 'localhost';
$user = 'root';
$password = '';
$server = 'mysql:dbname='.$dbname.';host='.$host;

//comment if you havent used createDatabase function yet
$db = new PDO($server,$user,$password);

function createDatabase($dbName) {
    $tmp = new PDO('mysql:dbname=;host=localhost;','root','');
    $sql = $tmp->prepare('CREATE DATABASE bp_blog');
    $sql->execute();

}

//execute if you need to create the database;
// createDatabase('bp_blog');


//execute all sql files in the database
$data = glob("sql/*.sql");
for($i=0;$i<count($data);$i++) {
    $fileData = file_get_contents($data[$i]);
    $sql = $db->prepare($fileData);
    if($sql) {
        echo 'Table '.str_replace(".sql","",str_replace("sql/","",$data[$i])).' created<br>';
        $sql->execute();
    }

}

?>
<?php 
$host='localhost';
$db = 'Bisiklet';
$username = 'postgres';
$password = '123456';
 
$dsn = "pgsql:host=$host;port=5432;dbname=$db;user=$username;password=$password";
try{
  $conn = new PDO($dsn);
 
  if($conn){
  
  }
 }catch (PDOException $e){
     header ('404.php');
 }

 $kayitli_ad="";
 $kayitli_neden="";
 $id=$_GET['id'] ;
 $query = $conn->query("SELECT * FROM tamirolcaklar where tamir_id = ".$id." limit 1");
 while ($row = $query->fetch()) {
    $kayitli_ad=$row['tamir_ad'];
    $kayitli_neden=$row['tamir_neden'];
 }


echo json_encode(array('a' => $kayitli_ad ,'z' => $kayitli_neden ,'e'=>$id)); 
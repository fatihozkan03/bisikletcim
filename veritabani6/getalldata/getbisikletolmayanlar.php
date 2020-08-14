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
 $kayitli_parca="";


 $id=$_GET['id'] ;
 $query = $conn->query("SELECT * FROM bisikletolmayanlar where olmayan_id = ".$id." limit 1");
 while ($row = $query->fetch()) {
    $kayitli_ad=$row['parca_ad'];
    $kayitli_parca=$row['parca_fiyat'];
 }


echo json_encode(array('a' => $kayitli_ad ,'z' => $kayitli_parca ,'e'=>$id)); 
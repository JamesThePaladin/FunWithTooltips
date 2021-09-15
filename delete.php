<?php

//delete.php
$servername = "localhost";
$dbname = "fullcalendar";
$username = "root";
$password = "";

if(isset($_POST["id"]))
{
$connect = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
 $query = "
 DELETE from events WHERE id=:id
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':id' => $_POST['id']
  )
 );
}

?>
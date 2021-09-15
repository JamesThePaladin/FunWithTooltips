<?php
//load.php
header("Content-Type: application/json");
$servername = "localhost";
$dbname = "fullcalendar";
$username = "root";
$password = "";

$connect = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

$data = array();

$query = "SELECT * FROM events ORDER BY id";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

foreach($result as $row)
{
 $data[] = array(
  'id'   => $row["id"],
  'title'   => $row["title"],
  'start'   => $row["start_event"],
  'end'   => $row["end_event"]
 );
}

Header('Content-Type: application/json');
echo json_encode($data);

?>
<?php

$request = "SELECT * FROM students";
$result = $connection->query($request);

while ($row = $result->fetch_assoc()) {
  $students[] = $row;
}
echo json_encode($students);
?>

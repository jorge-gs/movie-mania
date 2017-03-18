<?php
  $db = new mysqli("localhost", "root", "SomePassword", "Movies");
  $sql = "SELECT * FROM Movies";
  $response = $db->query($sql);

  $dict = array();

  foreach ($response as $row) {
    $dict["Movies"][] = $row;
  }

  $db->close();

  header("Content-Type: application/json");
  echo json_encode($dict);
?>

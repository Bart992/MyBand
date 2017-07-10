<?php

$image_list = array();

$sql = "SELECT * FROM images ORDER BY id DESC LIMIT 0, 6";
$result = $mysqli->query($sql);

while($item = $result-> fetch_assoc()) {
  $image_list[] = $item;
}

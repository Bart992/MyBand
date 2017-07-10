<?php

$news_list = array();

$sql = "SELECT * FROM races ORDER BY id ASC";
$result = $mysqli->query($sql);

while($item = $result-> fetch_assoc()) {
  $races_list[] = $item;
}

<?php

$news_list = array();

$sql = "SELECT * FROM news ORDER BY id DESC LIMIT 0, 6";
$result = $mysqli->query($sql);

while($item = $result-> fetch_assoc()) {
  $news_list[] = $item;
}

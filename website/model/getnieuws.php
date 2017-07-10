<?php
$image_list = array();

$query = "SELECT * FROM news ORDER BY id DESC LIMIT $limit_starting_number, $results_per_page";
$result = mysqli_query($mysqli,$query) or die ("Error querying getting data");

while($item = $result-> fetch_assoc()) {
  $news_list[] = $item;
}

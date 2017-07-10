<?php

//AANTAL ITEMS PER PAGINA
$results_per_page = 6;

//AANTAL PAGINA'S BEREKENEN
$query = "SELECT id FROM images";
$result = $mysqli->query($query) or die ('error');
$number_of_results = mysqli_num_rows($result);
$number_of_pages = ceil($number_of_results / $results_per_page);

//PAGINA CHECKEN MET TERNARY OPERATOR
!isset($_GET['pagina']) ? $page = 1 : $page = $_GET['pagina'];

//EERSTE ITEM VAN QUERY BEPALEN
$limit_starting_number = ($page - 1) * $results_per_page;

?>

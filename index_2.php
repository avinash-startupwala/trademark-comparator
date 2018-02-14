<?php

 $id = $_GET['id'];

$url = "http://www.startupwala.in/tm_comparator_api/get_new_trademarks.php?id=".$id;


$contents = file_get_contents($url);
echo $contents;

?>

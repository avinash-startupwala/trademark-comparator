<?php

 $id = $_GET['id'];

$ide = $_GET['ide'];

echo "ID On Heroku: ".$id." ";

echo " IDE on Heroku: ".$ide;


$url = "http://www.startupwala.in/tm_comparator_api/get_new_trademarks.php?id=".$id."&&ide=".$ide;


$contents = file_get_contents($url);
echo $contents;

?>

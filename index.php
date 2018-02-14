<?php

 $id = $_GET['id'];

$ide = $_GET['ide'];

$c = $_GET['c'];
echo "ID On Heroku: ".$id." ";

echo " IDE on Heroku: ".$ide;

echo " c On Heroku: ".$c." ";


$url = "http://www.startupwala.in/tm_comparator_api/get_new_trademarks.php?id=".$id."&&ide=".$ide."&&c=".$c;


$contents = file_get_contents($url);
echo $contents;

?>

<?php

echo "welcome";

$contents = file_get_contents('http://www.startupwala.in/tm_comparator_api/get_new_trademarks.php.php');
echo $contents;
?>

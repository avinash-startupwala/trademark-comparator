<?php

echo "welcome";

$contents = file_get_contents('http://www.startupwala.in/tm_comparator_api/index.php');
echo $contents;
?>

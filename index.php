<?php

echo "welcome";

$contents = file_get_contents('http://www.startupwala.in/autosuggest/index.php');
echo $contents;
?>

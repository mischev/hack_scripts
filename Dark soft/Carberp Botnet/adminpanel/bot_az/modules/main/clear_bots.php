<?php

$mysqli->query('TRUNCATE TABLE bf_bots');

$dir['prefix'] = true;

foreach($dir as $d => $files){
	unset($files[0], $files[1]);
	foreach($files as $value){
	}
}

header('Location: /main/stat.html');
exit;

?>
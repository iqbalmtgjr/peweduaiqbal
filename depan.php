<?php 
	require_once 'app/View.php';
 	require_once 'src/View.php';

 	$v = new \app\View();
 	$v->render();

 	echo "<br>";

 	$v = new \src\View();
 	$v->render();
 ?>
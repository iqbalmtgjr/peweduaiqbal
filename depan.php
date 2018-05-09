<?php 

spl_autoload_register(function($class) {
    include str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
});

	use app\View;

 	$v = new \src\View();
 	$v->render();

 	echo "<br>";

 	// $z = new \src\Mahasiswa();
 	// $z->test();

 	\model\Mahasiswa::munculkannama();
 ?>
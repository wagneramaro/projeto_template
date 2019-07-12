<?php 
require 'template.php';

$array = array(

	"titulo" => "Titulo da Página",
	"nome" => "Wagner",
	"idade" => 32

);

$tpl = new Template('template.phtml');
$tpl->render($array);

?>
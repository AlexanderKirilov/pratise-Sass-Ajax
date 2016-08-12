<?php
session_start();

$name = isset($_POST['usrName']) ? $_POST['usrName'] : 0;
$pass = isset($_POST['usrPass']) ? $_POST['usrPass'] : 0;


if($name == 0 || $name == 0){
	echo json_encode('empty');
	die();
}else{
	$_SESSION['logged'] = true;
	echo json_encode('success');
}


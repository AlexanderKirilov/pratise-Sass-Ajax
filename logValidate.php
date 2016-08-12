<?php
session_start();

$name = isset($_POST['usrName']) ? $_POST['usrName'] : 0;
$pass = isset($_POST['usrPass']) ? $_POST['usrPass'] : 0;


if(isset($_POST['usrName'])  && isset($_POST['usrName'])){
	$_SESSION['logged'] = true;
	$_SESSION['usrName'] = $name;
	echo json_encode('success');
}else{
	echo json_encode('empty');
	die();
}


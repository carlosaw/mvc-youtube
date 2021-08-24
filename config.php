<?php
require 'environment.php';

define("BASE_URL", "http://localhost/mvc/");

$config = array();

if(ENVIRONMENT == 'development') {
	$config['dbname'] = 'slug_mvc';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	//define("BASE_URL", "http://awregulagens.com.br/");
	$config['dbname'] = 'awregula_estrutura_mvc';
	$config['host'] = '162.241.2.197';
	$config['dbuser'] = 'awregula';
	$config['dbpass'] = 'H121tRa6lx';
}

global $db;
try {
	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'],$config['dbuser'],$config['dbpass']);
} catch(PDOException $e) {
	echo "ERRO: ".$e->getMessage();
	exit;
}


<?php 
$host = 'localhost';
$user = 'root';
$pass = 'fiador.e3';
$dbname = 'fullcalendar';
$port = '3306';

try {
	$conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);
	// echo "Conexão com banco de dados realizada com sucesso.";
} catch (PDOException $err) {
	echo "Erro: Conexão com banco de dados não realizado com sucesso. Erro gerado: " . $err->getMessage();
}
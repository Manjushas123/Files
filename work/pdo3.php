<?php
require 'Task.php';
try{
	$pdo=new PDO('mysql:host=127.0.0.1;dbname=mytodo','root','compass');

}
catch(PDPException $e)
{
	die($e->getMessage('select * '));

}
$statement->$pdo->prepare('select *from todos');
$statement->execute();
$tasks=$statement->fetchAll(PDO::FETCH_CLASS,'Task');
require 'pdo3.v.php';
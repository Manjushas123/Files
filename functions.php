<?php


function fetchAllTasks($pdo)
{
$statement = $pdo->prepare('select * from todos');
$statement->execute();
return $statement->fetchAll(PDO::FETCH_CLASS,'Task');
//var_dump($results[0]->description);
//var_dump($tasks[0]->foobar());
}
function dd($data) {
	 echo '<pre>';
	 die(var_dump($data));
	 echo '</pre>';
}
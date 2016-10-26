<?php
$database = require 'bootstrap.php';
$tasks = $database->selectAll('todos');
/*$routes=[
    ''=>'controllers/index.php',
    'about'=>'controllers/about.php',
    'about/culture'=> 'controllers/about-culture.php',
    'contact'=>'controllers/contact.php'
];*/
require 'db_pdonew.php';
?> 

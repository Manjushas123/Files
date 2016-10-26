<?php

$config = require 'config.php';
require 'connection.php';
require 'querybuilder.php';
return new querybuilder(connection::make($config['database'])); 
?>

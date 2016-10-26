<?php
$database = require 'bootstrap.php';
$tasks=$database->selectAll('todos');
require 'index12.view12.php'.

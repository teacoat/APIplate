<?php

require 'functions.php';

require 'Slim/Slim.php';
use Slim\Slim;
\Slim\Slim::registerAutoloader();

$app = new Slim();

$app->group('/users', function() use ($app){
	$app->get('/all', 'getAllUsers');
	$app->get('/all/:category', 'getUsersByCategory');
});

$app->group('/user', function() use ($app){
	$app->get('/:id', 'getUserById');
});

$app->run();

?>
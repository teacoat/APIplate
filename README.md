#API

Welcome to the teacoat api template!

**Please note this is not ready for public use**

This is a basic boilerplate aimed towards helping you getting an api up and running real quick-like for use in a javascript application or for external consumption.

This template takes advantage of Slim PHP and jQuery, though I originally built it for use with Angular it doesn't really matter what you use to consume the data.

##Example Set Up
Simply import api.sql into your database and point your localhost to the downloaded folder and update the rootPath in js/main.js if neccessary, you may also need to update the db credentials in api/config.php.

#API Coding
##Intro

All the api coding you will be doing is in /api, here you will find 

- config.php
- index.php
- functions.php

Config.php speaks for itself, just throw your creds in there.

Index.php is where you will define your routes, I have included a couple basic ones in there for your referance, but its pretty straightforward.

```
$app->group('/users', function() use ($app){
	$app->get('/all', 'getAllUsers');
	$app->get('/all/:category', 'getUsersByCategory');
});
```

This will work out to:

```
GET /users/all
GET /users/all/:category
```

You can also use `$app->post()` and `$app->put()` and `$app->delete().

##Functions

In functions.php you will find the MySQLi setup function and a few examples of different kinds of queries. The function names correlate to the string after the route definition in index.php.

$app->get('/all', **'getAllUsers'**);

You can do whatever you want really within the functions.

#Javascript

Also pretty straightforward,

```
var rootURL = "http://localhost:8888/api";

function findAll() {
	$.ajax({
		type: 'GET',
		url: rootURL+'/users/all',
		dataType: "json",
		success: function(r){
			console.log(r);
		}
	});
}
```

Just point your ajax request at the url, inject any content like ID's into the url, and the api will return your data.









<?php

// -----------------------------

include_once dirname(__FILE__).'/../lib/mustache.php/mustache.php';

// use .html instead of .mustache for default template extension
$options =  array('extension' => '.html');
$m = new Mustache_Engine(array(
    'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/../templates', $options),
));


// -----------------------------

$page_data = array(
	'page_title' => true,
	'title' => 'Név',
	'vote' => 'Szavazat',
	'name' => [
		[ 
			'name_text' => 'János', 
			'name_vote' => 1 
		],
		[ 
			'name_text' => 'Béla', 
			'name_vote' => 2 
		],
		[ 
			'name_text' => 'Lajos', 
			'name_vote' => 5 
		],
		[ 
			'name_text' => 'Géza', 
			'name_vote' => 11 
		]
	],
	'no_escape' => '<b>without escape</b>'
);

$page_data['_debug_data'] = json_encode($page_data, JSON_PRETTY_PRINT);

// -----------------------------

// loads template from `../templates/index.html` and renders it.
echo $m->render('index', $page_data);



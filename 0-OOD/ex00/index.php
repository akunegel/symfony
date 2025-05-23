<?php

require_once 'TemplateEngine.php';

$templateEngine = new TemplateEngine();

$parameters = [
	'nom' => '0-OOD',
	'auteur' => '42',
	'description' => 'piscineSymfony',
	'prix' => "0$",
];

$templateEngine->createFile('output.html', 'book_description.html', $parameters);



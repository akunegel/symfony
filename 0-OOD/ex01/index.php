<?php

require_once 'TemplateEngine.php';
require_once 'Text.php';

$strings = ["Salut", "test", "asadasdasd"];
$text = new Text($strings);
$text->append("Salut encore");

$templateEngine = new TemplateEngine();

$templateEngine->createFile("output.html", $text);

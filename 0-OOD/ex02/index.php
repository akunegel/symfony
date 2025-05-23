<?php

require_once 'Coffee.php';
require_once 'Tea.php';
require_once 'TemplateEngine.php';

$coffee = new Coffee();
$tea = new Tea();

$engine = new TemplateEngine();
$engine->createFile($coffee);
$engine->createFile($tea);


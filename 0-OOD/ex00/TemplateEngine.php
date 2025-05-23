<?php

class TemplateEngine {
	function createFile($filename, $templateName, $parameters) {
		if (!file_exists($templateName)) {
			die("template file not found.");	
		}

		$content = file_get_contents($templateName);
		
		foreach ($parameters as $key => $value) {
			$content = str_replace("{" . $key . "}", $value, $content);
		}
		echo $content;

		file_put_contents($filename, $content);
	}
}

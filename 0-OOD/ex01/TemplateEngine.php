<?php

class TemplateEngine {
	function createFile($filename, $text) {
		if (!file_exists($filename)) {
			die("file not found.\n");
		}

		$content = file_get_contents($filename);

		$lines = explode("\n", $content);
	        $htmlToInsert = $text->readData();

		foreach ($lines as $index => $line) {
			if (strpos($line, '<body>') !== false) {
				preg_match('/^(\t*)/', $line, $matches);
				$tabs = $matches[1];

				$html = explode("\n", $htmlToInsert);
				foreach ($html as &$h) {
					$h = $tabs . "\t" . $h;
				}
				unset($h);

				array_splice($lines, $index + 1, 0, $html);
				break;
			}
		}

		$ret = implode("\n", $lines);
		file_put_contents("./textOutput.html", $ret);
	}
}

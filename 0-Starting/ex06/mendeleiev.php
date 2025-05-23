<?php
$html = "<!DOCTYPE html>\n<html lang=\"en\"><head>\n\t<meta charset=\"UTF-8\">\n\t<title>Mandeliev</title>\n</head>\n<body>";
$html .= "<table style=\"border-collapse: collapse;\">\n";

$file = fopen("./ex06.txt", 'r') or die("Unable to open file\n");
$content = fread($file, filesize("./ex06.txt"));
fclose($file);

$current_pos = 0;

$lines = explode("\n", trim($content));

$html .= "\t<tr>\n";

foreach ($lines as $line) {
	list($name, $data) = explode(" = ", $line);
	$specs = [];
	foreach (explode(", ", $data) as $item) {
		list($key, $value) = explode(":", $item);
		$specs[trim($key)] = trim($value);
	}

	$position = intval($specs['position']);
	while ($current_pos < $position) {
		$html .= "\t\t<td></td>\n";
		$current_pos++;
	}

	$html .= "\n\t<td style=\"background-color: pink; border: 1px solid black; padding:10px; vertical-align:top\">\n";
	$html .= "\t\t<h4>$name</h4>\n\t\t<ul>\n";
	$html .= "\t\t\t<li>No {$specs['number']}</li>\n";
	$html .= "\t\t\t<li>{$specs['small']}</li>\n";
	$html .= "\t\t\t<li>{$specs['molar']}</li>\n";
	$html .= "\t\t\t<li>{$specs['electron']} electron</li>\n";
	$html .= "\t\t</ul>\n\t</td>";

	$current_pos++;

	if ($current_pos >= 18) {
		$html .= "\t</tr>\n\t<tr>\n";
        	$current_pos = 0;
	}
}

while ($current_pos < 18) {
    $html .= "\n\t<td></td>";
    $current_pos++;
}
$html .= "\n</tr>";
$html .= "\t</tr>\n</table>\n</body>\n</html>";

file_put_contents("mendeleiev.html", $html);



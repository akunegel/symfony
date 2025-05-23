<?php

class TemplateEngine {
    public function createFile(HotBeverage $text): void {
        $class = new ReflectionClass($text);
        $vars = [];

        foreach ($class->getMethods(ReflectionMethod::IS_PUBLIC) as $method) {
            if (str_starts_with($method->getName(), 'get')) {
                $property = lcfirst(substr($method->getName(), 3));
                
                // Map English getter names to French template keys
                $keyMap = [
                    'name' => 'nom',
                    'resistence' => 'resistance',
                    'price' => 'price',
                    'description' => 'description',
                    'comment' => 'comment'
                ];

                if (array_key_exists($property, $keyMap)) {
                    $vars[$keyMap[$property]] = $method->invoke($text);
                }
            }
        }

        $template = file_get_contents('template.html');

        foreach ($vars as $key => $value) {
            $template = str_replace('{' . $key . '}', $value, $template);
        }

        $filename = $class->getShortName() . '.html';
        file_put_contents($filename, $template);
    }
}


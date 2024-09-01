<?php

namespace Core\shablonisator;

use Exception;

class TemplateEngine
{
    private $template;

    public function __construct($templatePath)
    {
        if (!file_exists($templatePath))
            throw new Exception("Template file does not exist.");
        $this->template = file_get_contents($templatePath);

    }
    public function render($context)
    {

        if ($context) {

            foreach ($context as $key => $value) {

                $output = str_replace('{{ ' . '@' . $key . ' }}', $value, $this->template);

            }

            return $output;

        }

        return $this->template;
    }
}
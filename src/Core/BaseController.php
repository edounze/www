<?php

namespace App\Core;

class BaseController
{
    /**
     * Renders a template with the given params and returns the generated HTML.
     *
     * @param string $template The template file to render.
     * @param array $params An associative array of params to extract and use within the template.
     * @return string The rendered HTML content.
     */
    public function render(string $template, array $params = [])
    {
        extract($params);
        ob_start();

        include __DIR__ . '/../../templates/' . $template;
        $html = ob_get_clean();
        return $html;
    }

    // A static method to include any template from another template
    public static function includeTemplate(string $template, array $params = [])
    {
        extract($params);
        include __DIR__ . '/../../templates/' . $template;
    }
}

<?php

namespace TSterker\RabbitMq;

use GuzzleHttp\UriTemplate\UriTemplate;


class Helper
{

    /**
     * Expands a URI template
     *
     * @param string $template  URI template
     * @param mixed[]  $variables Template variables
     *
     * @return string
     */
    public static function uri_template($template, $variables)
    {

        static $uriTemplate;
        if (!$uriTemplate) {
            $uriTemplate = new UriTemplate();
        }

        return $uriTemplate->expand($template, $variables);
    }
}

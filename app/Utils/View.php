<?php

namespace App\Utils;

class View
{
    /**
     * Método responsável por retornar o conteúdo de uma view
     *
     * @param string $view
     * @return string
     */
    private static function getContentView($view)
    {
        $file = __DIR__ . '/../../resources/view/' . $view . '.html';
        return file_exists($file) ? file_get_contents($file) : '';
    }

    /**
     * Método responsável por retornar o conteúdo renderizado de uma view
     *
     * @param string $view
     * @return string
     */
    public static function render($view)
    {
        // Conteúdo da view
        $contentView = self::getContentView($view);

        // Retorna o conteúdo renderizado
        return $contentView;
    }
}

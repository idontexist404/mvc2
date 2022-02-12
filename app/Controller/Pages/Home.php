<?php

namespace App\Controller\Pages;

use App\Utils\View;

class Home extends Page
{
    /**
     * Método responsável por retornar o conteúdo (view) da nossa home
     *
     * @return string
     */
    public static function getHome()
    {
        // View da home
        $content = View::render('pages/home', [
            'name' => 'Evil Corp.',
            'description' => '(•̀ᴗ•́)و ̑̑  Large super-corporation that is very big. And evil!',
            'site' => 'https://www.evilcorp.com/'
        ]);

        // Retorna a view da página
        return parent::getPage('Evil Corp. - Home', $content);
    }
}

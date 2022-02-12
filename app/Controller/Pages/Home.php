<?php

namespace App\Controller\Pages;

use App\Utils\View;

class Home
{
    /**
     * Método responsável por retornar o conteúdo (view) da nossa home
     *
     * @return string
     */
    public static function getHome()
    {
        return View::render('pages/home', [
            'name' => 'Evil Corp.',
            'description' => '(•̀ᴗ•́)و ̑̑  Large super-corporation that is very big. And evil!',
            'site' => 'https://www.evilcorp.com/'
        ]);
    }
}

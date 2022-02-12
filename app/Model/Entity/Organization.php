<?php

namespace App\Model\Entity;

/* Essa classe é apenas um 'banco de dados' ficticio para exemplificar como o model pode
ser implementado */

class Organization
{
    /**
     * ID da organização
     *
     * @var intenger
     */
    public $id = 1;

    /**
     * Nome da organização
     *
     * @var string
     */
    public $name = 'Evil Corp. (•̀ᴗ•́)و ̑̑ ';

    /**
     * Site da organização
     *
     * @var string
     */
    public $site = 'https://www.evilcorp.com/';

    /**
     * Descrição da organizaçao
     *
     * @var string
     */
    public $description = 'Large super-corporation that is very big. And evil! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quas doloribus corrupti minus sint quibusdam velit, dolorem distinctio neque dignissimos ratione ullam, nulla eius vel ea quod rem accusantium aliquid.';

}

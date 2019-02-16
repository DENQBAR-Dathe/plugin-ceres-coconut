<?php

namespace DenqbarTemplate\Containers;

use Plenty\Plugin\Templates\Twig;

class DenqbarTemplateItemListContainer3
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('DenqbarTemplate::Containers.ItemLists.ItemList3', ["item" => $arg[0]]);
    }
}

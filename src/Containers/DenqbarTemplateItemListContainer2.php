<?php

namespace DenqbarTemplate\Containers;

use Plenty\Plugin\Templates\Twig;

class DenqbarTemplateItemListContainer2
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('DenqbarTemplate::Containers.ItemLists.ItemList2', ["item" => $arg[0]]);
    }
}

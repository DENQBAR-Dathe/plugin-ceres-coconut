<?php

namespace DenqbarTemplate\Containers;

use Plenty\Plugin\Templates\Twig;

class DenqbarTemplateItemListContainer1
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('DenqbarTemplate::Containers.ItemLists.ItemList1', ["item" => $arg[0]]);
    }
}

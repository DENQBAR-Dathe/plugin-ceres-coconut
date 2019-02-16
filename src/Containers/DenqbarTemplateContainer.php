<?php

namespace DenqbarTemplate\Containers;

use Plenty\Plugin\Templates\Twig;

class DenqbarTemplateContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('DenqbarTemplate::Stylesheet');
    }
}

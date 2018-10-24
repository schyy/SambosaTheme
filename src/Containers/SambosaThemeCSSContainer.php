<?php

namespace SambosaTheme\Containers;

use Plenty\Plugin\Templates\Twig;

class SambosaThemeCSSContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('SambosaTheme::content.SambosaThemeCSS');
    }
}

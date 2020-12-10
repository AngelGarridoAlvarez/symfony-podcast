<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class MiFiltroExtension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            // If your filter generates SAFE HTML, you should add a third
            // parameter: ['is_safe' => ['html']]
            // Reference: https://twig.symfony.com/doc/2.x/advanced.html#automatic-escaping
            new TwigFilter('multiplicar', [$this, 'multiplicar']),
        ];
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('multiplicar', [$this, 'multiplicar']),
        ];
    }

    public function multiplicar($value)
    {
        $tabla = "<h3>Tabla del $value</h3>";
        for($i = 0; $i <= 10; $i++){
            $tabla .="$i x $value = ".($i*$value)."<br/>";
        }

        return $tabla;
    }
}

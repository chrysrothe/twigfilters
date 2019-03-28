<?php

declare(strict_types = 1);  

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class TruncateFilter extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            new TwigFilter('truncate', [$this, 'truncate']),
        ];
    }

    public function truncate(string $string, int $words): ?string
    {
        $array = explode(' ',$string);
        if (count($array) > $words && $words > 0) {
            $string = implode(' ',array_slice($array, 0, $words));   
        }
        return $string;
    }
}
<?php

declare(strict_types = 1);  

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class GradeFilter extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            new TwigFilter('grade', [$this, 'grade']),
        ];
    }

    public function grade(float $grade): ?string
    {
        if ($grade < 1 || $grade > 6) {
            return null;
        }

        switch($grade) {
            case ($grade === 1) : return 'excellent';
            case ($grade < 2) : return 'very good';
            case ($grade < 3) : return 'good';
            case ($grade < 4) : return 'satisfactory';
            case ($grade <= 6) : return 'inadequate';
        }
    }
}
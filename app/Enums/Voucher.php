<?php

namespace App\Enums;


enum Diet: string
{
    case ALL      = "";
    case NORTH    = 'north';
    case SOUTH   = 'south';

    public  function labels(): string
    {
        return match ($this) {
            self::ALL         => "🍽️ All diets",
            self::NORTH       => "🌱 Suitable for Vegans",
            self::SOUTH      => "🥜 Suitable for Celiacs",
        };
    }

    // Returns labels for PowerGrid Select Filter
    public function labelPowergridFilter(): string
    {
        return $this->labels();
    }
}
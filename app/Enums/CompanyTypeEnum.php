<?php

namespace App\Enums;

use Spatie\Enum\Laravel\Enum;

/**
 * @method static self SPONSOR()
 * @method static self SPONSOR_GOLD()
 * @method static self SPONSOR_MAIN()
 * @method static self SPONSOR_LOCATION()
 * @method static self PARTNER()
 */
final class CompanyTypeEnum extends Enum
{
    protected static function values(): array
    {
        return [
            'SPONSOR' => 'sponsor',
            'SPONSOR_GOLD' => 'sponsor-gold',
            'SPONSOR_MAIN' => 'sponsor-main',
            'SPONSOR_LOCATION' => 'sponsor-location',
            'PARTNER' => 'partner',
        ];
    }

    protected static function labels(): array
    {
        return [
            'SPONSOR' => 'Silver Sponsor',
            'SPONSOR_GOLD' => 'Gold Sponsor',
            'SPONSOR_MAIN' => 'Main Sponsor',
            'SPONSOR_LOCATION' => 'Location Sponsor',
            'PARTNER' => 'Partner',
        ];
    }
}

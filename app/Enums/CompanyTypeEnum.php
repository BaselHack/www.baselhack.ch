<?php

namespace App\Enums;

use Spatie\Enum\Laravel\Enum;

/**
 * @method static self SPONSOR()
 * @method static self SPONSOR_MAIN()
 * @method static self PARTNER()
 */
final class CompanyTypeEnum extends Enum
{
    protected static function values(): array
    {
        return [
            'SPONSOR' => 'sponsor',
            'SPONSOR_MAIN' => 'sponsor-main',
            'PARTNER' => 'partner',
        ];
    }

    protected static function labels(): array
    {
        return [
            'SPONSOR' => 'Sponsor',
            'SPONSOR_MAIN' => 'Sponsor Main',
            'PARTNER' => 'Partner',
        ];
    }
}

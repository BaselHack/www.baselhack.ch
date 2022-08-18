<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use JetBrains\PhpStorm\ArrayShape;

class SponsorsCollection
{
    private const ARRAY_SHAPE = [
        'mainSponsors' => Collection::class,
        'goldSponsors' => Collection::class,
        'silverSponsors' => Collection::class,
        'locationSponsors' => Collection::class
    ];

    public Collection $mainSponsors;

    public Collection $goldSponsors;

    public Collection $silverSponsors;

    public Collection $locationSponsors;

    #[ArrayShape(self::ARRAY_SHAPE)] public function toArray(): array
    {
        return [
            'mainSponsors' => $this->mainSponsors,
            'goldSponsors' => $this->goldSponsors,
            'silverSponsors' => $this->silverSponsors,
            'locationSponsors' => $this->locationSponsors
        ];
    }
}

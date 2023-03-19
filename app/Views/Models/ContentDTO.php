<?php

namespace App\Views\Models;

use App\Models\Page;
use App\Models\Section;
use Illuminate\Support\Str;
use Spatie\LaravelData\Data;

class ContentDTO extends Data
{
    public function __construct(
        public Page|null $page,
        public string|null $title,
        public string|null $teaser,
        public string|null $body,
    ) {
    }

    public static function fromModel(string $key): self
    {
        $page = Page::whereIndex($key)->first();
        $section = Section::whereIndex($key)->first();

        return new self(
            $page,
            $section?->title,
            $section?->teaser,
            Str::of($section?->body)?->markdown(),
        );
    }
}

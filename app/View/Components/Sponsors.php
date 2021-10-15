<?php

namespace App\View\Components;

use Illuminate\Support\Collection;
use Illuminate\View\Component;

class Sponsors extends Component
{
    public $gridClass;
    public $sponsors;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($gridClass,Collection $sponsors)
    {
        $this->gridClass = $gridClass;
        $this->sponsors = $sponsors;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sponsors');
    }
}

<?php

namespace App\View\Components;

use Illuminate\View\Component;

class headerViewDinamic extends Component
{
    public $titleDinamic;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($titleDinamic)
    {
        $this->titleDinamic = $titleDinamic;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header-view-dinamic');
    }
}

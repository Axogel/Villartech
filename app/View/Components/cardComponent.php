<?php

namespace App\View\Components;

use Illuminate\View\Component;

class cardComponent extends Component
{

    public  $description;
    public $img;
    public  $title;
    public $subtitle;
    public $height;
    public $width;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($description, $height, $img, $title = null, $subtitle, $width)
    {
        $this->description = $description;

         $this->height = $height;

        $this->img = $img;

        $this->title = $title;

        $this->subtitle = $subtitle;

        $this->width = $width;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card-component');
    }
}

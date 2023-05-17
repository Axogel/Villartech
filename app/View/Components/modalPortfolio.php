<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Portfolio;

class modalPortfolio extends Component
{
    public  $portfolioID;
    public $portafolio;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($portfolioID, Portfolio $portafolio)
    {
        $this->portfolioID = $portfolioID;
        $this->portafolio = $portafolio;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modal-portfolio');
    }

}

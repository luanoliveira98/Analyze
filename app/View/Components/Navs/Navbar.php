<?php

namespace App\View\Components\Navs;

use Illuminate\View\Component;

class Navbar extends Component
{
    /**
     * Página atual da aba.
     *
     * @var string
     */
    public $currentPage;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($currentPage)
    {
        $this->currentPage = $currentPage;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.navs.navbar');
    }
}

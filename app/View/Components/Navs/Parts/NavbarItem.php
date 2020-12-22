<?php

namespace App\View\Components\Navs\Parts;

use Illuminate\View\Component;

class NavbarItem extends Component
{
    /**
     * Label do item no menu.
     *
     * @var string
     */
    public $label;
    
    /**
     * Rota do item do menu.
     *
     * @var string
     */
    public $route;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $route)
    {
        $this->label = $label;
        $this->route = $route;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.navs.parts.navbar-item');
    }
}

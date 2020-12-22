<?php

namespace App\View\Components\Navs\Parts;

use Illuminate\View\Component;

class NavItem extends Component
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
     * Ícone do item do menu.
     *
     * @var string
     */
    public $icon;
    
    /**
     * Se é ou não o item ativo do menu
     *
     * @var bool
     */
    public $active;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $route=null, $icon, $active=false)
    {
        $this->label = $label;
        $this->route = $route;
        $this->icon = $icon;
        $this->active = (strtoupper($label)==strtoupper($active)) ? true : false;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.navs.parts.nav-item');
    }
}

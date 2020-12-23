<?php

namespace App\View\Components\Breadcrumbs;

use Illuminate\View\Component;

class Item extends Component
{
    /**
     * Rota do Item do Breadcrumb
     * 
     * @var string
     */
    public $route;
    
    /**
     * Label do Item do Breadcrumb
     * 
     * @var string
     */
    public $label;

    /**
     * Página ativa.
     *
     * @var string
     */
    public $active;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($route, $label, $active=false)
    {
        $this->route = $route;
        $this->label = $label;
        $this->active = (strtoupper($label)==strtoupper($active)) ? true : false;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.breadcrumbs.item');
    }
}

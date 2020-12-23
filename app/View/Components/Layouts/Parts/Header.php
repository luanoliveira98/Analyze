<?php

namespace App\View\Components\Layouts\Parts;

use Illuminate\View\Component;

class Header extends Component
{
    /**
     * Título do Header.
     *
     * @var string
     */
    public $title;
    
    /**
     * Breadcrumbs.
     *
     * @var array
     */
    public $breadcrumbs;

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
    public function __construct($title, $breadcrumbs=null, $active)
    {
        $this->title = $title;
        $this->breadcrumbs = $breadcrumbs;
        $this->active = $active;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.layouts.parts.header');
    }
}

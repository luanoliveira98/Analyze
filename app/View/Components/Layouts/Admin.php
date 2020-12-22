<?php

namespace App\View\Components\Layouts;

use Illuminate\View\Component;

class Admin extends Component
{
    /**
     * Título da Aba.
     *
     * @var string
     */
    public $title;

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
    public function __construct($title, $active)
    {
        $this->title = $title;
        $this->active = $active;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.layouts.admin');
    }
}

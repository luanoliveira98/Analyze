<?php

namespace App\View\Components\Buttons;

use Illuminate\View\Component;

class Link extends Component
{
    /**
     * Rota do botão
     * 
     * @var string
     */
    public $route;

    /**
     * Cor do botão
     * 
     * @var string
     */
    public $color;

    /**
     * Ícone do botão
     * 
     * @var string
     */
    public $icon;

    /**
     * Título do botão
     * 
     * @var string
     */
    public $title;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($route, $color, $icon, $title)
    {
        $this->route    = $route;
        $this->color    = $color;
        $this->icon     = $icon;
        $this->title   = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.buttons.link');
    }
}

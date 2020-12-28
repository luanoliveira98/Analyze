<?php

namespace App\View\Components\Buttons;

use Illuminate\View\Component;

class Btn extends Component
{
    /**
     * Tipo do botão
     * 
     * @var string
     */
    public $type;
    
    /**
     * Cor do botão
     * 
     * @var string
     */
    public $color;
    
    /**
     * Label do botão
     * 
     * @var string
     */
    public $label;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type = 'submit', $color, $label = 'Salvar')
    {
        $this->type     = $type;
        $this->color    = $color;
        $this->label    = $label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.buttons.btn');
    }
}

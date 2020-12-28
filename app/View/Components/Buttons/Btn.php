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
     * Ícone do botão
     * 
     * @var string
     */
    public $icon;
    
    /**
     * Title do botão
     * 
     * @var string
     */
    public $title;
    
    /**
     * Tamanho do botão
     * 
     * @var string
     */
    public $size;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type = 'submit', $color, $label = 'Salvar', $title = null, $icon = null, $size = null)
    {
        $this->type     = $type;
        $this->color    = $color;
        $this->label    = $label;
        $this->icon     = $icon;
        $this->title    = $title;
        $this->size     = $size;
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

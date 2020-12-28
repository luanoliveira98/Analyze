<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class Input extends Component
{
   /**
     * Name e ID do input
     * 
     * @var string
     */
    public $name;
    
    /**
     * Label do input
     * 
     * @var string
     */
    public $label;
    
    /**
     * Placeholder do input
     * 
     * @var string
     */
    public $placeholder;

    /**
     * Tipo do input
     * 
     * @var string
     */
    public $type;

    /**
     * Valor do input
     * 
     * @var string
     */
    public $value;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $label, $placeholder, $type = 'text', $value = null)
    {
        $this->name         = $name;
        $this->label        = $label;
        $this->placeholder  = $placeholder;
        $this->type         = $type;
        $this->value        = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.forms.input');
    }
}

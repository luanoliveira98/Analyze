<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class Select extends Component
{
    /**
      * Name e ID do select
      * 
      * @var string
      */
     public $name;
     
     /**
      * Label do select
      * 
      * @var string
      */
     public $label;
     
     /**
      * Placeholder do select
      * 
      * @var string
      */
     public $placeholder;
 
     /**
      * Options do select
      * 
      * @var string
      */
     public $options;
 
     /**
      * Valor do select
      * 
      * @var string
      */
     public $value;
 
     /**
      * Create a new component instance.
      *
      * @return void
      */
     public function __construct($name, $label, $placeholder, $value = null, $options)
     {
         $this->name         = $name;
         $this->label        = $label;
         $this->placeholder  = $placeholder;
         $this->options      = $options;
         $this->value        = $value;
     }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.forms.select');
    }
}

<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class Base extends Component
{
    /**
     * Ação do formulário (Rota)
     * 
     * @var string
     */
    public $action;

    /**
     * Método do formulário
     * 
     * @var string
     */
    public $method;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($action, $method = 'GET')
    {
        $this->action = $action;
        $this->method = strtoupper($method);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.forms.base');
    }
}

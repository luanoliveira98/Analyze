<?php

namespace App\View\Components\Tables;

use Illuminate\View\Component;

class DataTables extends Component
{
    /**
     * Dados para preencher a tabela
     * 
     * @var object
     */
    public $data;

    /**
     * Atributos para preencher a tabela
     * 
     * @var object
     */
    public $thead;

    /**
     * Rota base para as ações
     * 
     * @var object
     */
    public $route;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($data, $thead, $route)
    {
        $this->data = $data;
        $this->thead = $thead;
        $this->route = $route;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.tables.data-tables')
            ->with('data', $this->data)
            ->with('thead', $this->thead);
    }
}

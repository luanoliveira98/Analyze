<?php

namespace App\View\Components\Dashboard;

use Illuminate\View\Component;

class Widget extends Component
{
    /**
     * Label do widget.
     *
     * @var string
     */
    public $label;
    
    /**
     * Rota do widget.
     *
     * @var string
     */
    public $route;
    
    /**
     * Ícone do widget.
     *
     * @var string
     */
    public $icon;
    
    /**
     * Contagem de registros do widget.
     *
     * @var int
     */
    public $count;
    
    /**
     * Colunas do widget.
     *
     * @var int
     */
    public $col;
    
    /**
     * Cor do widget.
     *
     * @var string
     */
    public $color;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $route, $icon, $count, $col=3, $color="primary")
    {
        $this->label = $label;
        $this->route = $route;
        $this->icon = $icon;
        $this->count = $count;
        $this->col = $this->getCols($col);
        $this->color = $color;
    }

    public function getCols($col)
    {
        if($col < 3) {
            return "col-lg-$col col-4";
        } else if ($col < 6) {
            return "col-lg-$col col-6";
        } else {
            return "col-lg-$col col-12";
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.dashboard.widget');
    }
}

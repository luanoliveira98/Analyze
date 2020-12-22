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
     * Página atual da aba.
     *
     * @var string
     */
    public $currentPage;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $currentPage)
    {
        $this->title = $title;
        $this->currentPage = $currentPage;
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

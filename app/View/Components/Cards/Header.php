<?php

namespace App\View\Components\Cards;

use Illuminate\View\Component;

class Header extends Component
{
    /**
     * Título do Card
     * 
     * @var string
     */
    public $title;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title)
    {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.cards.header');
    }
}

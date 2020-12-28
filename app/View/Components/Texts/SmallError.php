<?php

namespace App\View\Components\Texts;

use Illuminate\View\Component;

class SmallError extends Component
{
    /**
     * Nome para buscar o erro
     * 
     * @var string
     */
    public $name;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.texts.small-error');
    }
}

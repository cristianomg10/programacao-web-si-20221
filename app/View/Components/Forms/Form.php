<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class Form extends Component
{
    public $inputsData;
    public $link;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($inputsData, $link)
    {
        $this->inputsData = $inputsData;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.form');
    }
}

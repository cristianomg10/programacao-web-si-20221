<?php

namespace App\View\Components\Botoes;

use Illuminate\View\Component;

class Excluir extends Component
{
    public $id;
    public $entidade;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $entidade)
    {
        $this->id = $id;
        $this->entidade = $entidade;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.botoes.excluir');
    }
}

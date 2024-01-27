<?php

namespace App\View\Components\Operacoes;

use Illuminate\View\Component;

class Botoes extends Component
{
    public $id;
    public $linkAlterar;
    public $entidade;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $linkAlterar, $entidade)
    {
        $this->id = $id;
        $this->linkAlterar = $linkAlterar;
        $this->entidade = $entidade;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.operacoes.botoes');
    }
}

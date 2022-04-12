<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Endereco;

class Cliente extends Model
{
    use HasFactory;
    protected $table = "clientes";

    function enderecos(){
        return $this->hasMany(Endereco::class, 'id_cliente', 'id');
    }
}

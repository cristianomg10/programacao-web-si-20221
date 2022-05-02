<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Endereco;

class Cliente extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "clientes";

    function enderecos(){
        return $this->hasMany(Endereco::class, 'id_cliente', 'id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrega extends Model
{
    protected $fillable = array('id', 'nome', 'data_entrega','ponto_partida','ponto_destino');
}

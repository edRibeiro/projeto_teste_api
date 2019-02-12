<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{
    protected $fillable = [
		'nome', 'cpf', 'cnpj'
    ];
}

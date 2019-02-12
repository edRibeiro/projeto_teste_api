<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Establishment extends Model
{
    protected $fillable = [
		'NomeFantasia', 'RazaoSocial', 'CNPJ'
    ];
}

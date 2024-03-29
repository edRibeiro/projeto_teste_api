<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Establishment.
 *
 * @package namespace App\Entities;
 */
class Establishment extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['NomeFantasia', 'RazaoSocial','CNPJ','Email', 'Telefone'];

}

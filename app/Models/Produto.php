<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Produto
 * @package App\Models
 * @version November 30, 2020, 9:40 pm UTC
 *
 * @property string|\Carbon\Carbon data_cadastro
 * @property varchar nome_produto
 * @property number valor_produto
 */
class Produto extends Model
{
    use SoftDeletes;

    public $table = 'produtos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'data_cadastro',
        'nome_produto',
        'valor_produto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'data_cadastro' => 'datetime',
        'valor_produto' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'data_cadastro' => 'required',
        'nome_produto' => 'required',
        'valor_produto' => 'required'
    ];

    
}

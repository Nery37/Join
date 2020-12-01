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
    

    protected $primaryKey = 'id_produto'; 

    protected $dates = ['deleted_at'];



    public $fillable = [
        'data_cadastro',
        'nome_produto',
        'valor_produto',
        'id_categoria_produto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_categoria_produto' => 'integer',
        'data_cadastro' => 'datetime',
        'valor_produto' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nome_produto' => 'required',
        'valor_produto' => 'required',
        'id_categoria_produto' => 'required'
    ];

    public function categoria()
    {
        return $this->belongsTo('App\Models\CategoriaProduto', 'id_categoria_produto', 'id_categoria_planejamento');
    }

    
}

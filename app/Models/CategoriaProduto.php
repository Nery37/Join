<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CategoriaProduto
 * @package App\Models
 * @version November 30, 2020, 9:45 pm UTC
 *
 * @property varchar nome_categoria
 */
class CategoriaProduto extends Model
{
    use SoftDeletes;

    public $table = 'categoria_produto';
    
    protected $primaryKey = 'id_categoria_planejamento'; 

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nome_categoria'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nome_categoria' => 'required'
    ];

    
}

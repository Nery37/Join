<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cliente
 * @package App\Models
 * @version February 19, 2020, 4:09 am UTC
 *
 * @property string nome
 * @property string cpf
 * @property string rg
 * @property string|\Carbon\Carbon created_at
 * @property string|\Carbon\Carbon updated_at
 * @property integer created_by
 * @property integer updated_by
 * @property string data_nascimento
 * @property integer telefone
 * @property string local_nascimento
 */
class Cliente extends Model
{
    use SoftDeletes;

    public $table = 'clientes';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nome',
        'telefone',
        'email',
        'created_at',
        'updated_at',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome' => 'string',
        'telefone' => 'integer',
        'email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
    //    'nome' => 'required',
    //    'telefone' => 'required',
    //    'email' => 'required'
    ];

    
}

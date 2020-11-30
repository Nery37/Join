<?php

namespace App\Repositories;

use App\Models\Produto;
use App\Repositories\BaseRepository;

/**
 * Class ProdutoRepository
 * @package App\Repositories
 * @version November 30, 2020, 9:40 pm UTC
*/

class ProdutoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'data_cadastro',
        'nome_produto',
        'valor_produto'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Produto::class;
    }
}

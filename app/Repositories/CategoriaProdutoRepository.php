<?php

namespace App\Repositories;

use App\Models\CategoriaProduto;
use App\Repositories\BaseRepository;

/**
 * Class CategoriaProdutoRepository
 * @package App\Repositories
 * @version November 30, 2020, 9:45 pm UTC
*/

class CategoriaProdutoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome_categoria'
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
        return CategoriaProduto::class;
    }
}

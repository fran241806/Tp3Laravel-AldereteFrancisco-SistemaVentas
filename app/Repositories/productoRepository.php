<?php

namespace App\Repositories;

use App\Models\producto;
use InfyOm\Generator\Common\BaseRepository;

class productoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'descripcion',
        'stock',
        'precio',
        'categoria_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return producto::class;
    }
}

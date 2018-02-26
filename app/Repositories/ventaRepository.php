<?php

namespace App\Repositories;

use App\Models\venta;
use InfyOm\Generator\Common\BaseRepository;

class ventaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fecha',
        'cliente_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return venta::class;
    }
}

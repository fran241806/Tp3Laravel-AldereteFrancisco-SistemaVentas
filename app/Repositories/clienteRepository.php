<?php

namespace App\Repositories;

use App\Models\cliente;
use InfyOm\Generator\Common\BaseRepository;

class clienteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'dni'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return cliente::class;
    }
}

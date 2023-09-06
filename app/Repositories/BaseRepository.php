<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class BaseRepository
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function save(array $inputs, array $conditions = ['id' => null])
    {
        return $this->model->updateOrCreate($conditions, $inputs);
    }

}

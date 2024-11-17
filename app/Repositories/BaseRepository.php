<?php
namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class BaseRepository
{
    public function __construct(protected Model $model)
    {
        $this->model = $model;
    }
}

<?php


namespace App\Repositories\Cake;

use App\Models\Cake;
use App\Repositories\BaseRepository;

class CakeRepository extends BaseRepository implements CakeRepositoryContract
{
    protected $model;

    /**
     * @param Cake $model
     */
    public function __construct(Cake $model)
    {
        $this->model = $model;
    }
}

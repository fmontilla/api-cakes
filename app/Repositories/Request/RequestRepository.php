<?php


namespace App\Repositories\Request;

use App\Models\Request;
use App\Repositories\BaseRepository;

class RequestRepository extends BaseRepository implements RequestRepositoryContract
{
    protected $model;

    /**
     * @param Request $model
     */
    public function __construct(Request $model)
    {
        $this->model = $model;
    }
}

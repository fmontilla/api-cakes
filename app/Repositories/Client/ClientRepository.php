<?php


namespace App\Repositories\Client;

use App\Models\Client;
use App\Repositories\BaseRepository;

class ClientRepository extends BaseRepository implements ClientRepositoryContract
{
    protected $model;

    /**
     * @param Client $model
     */
    public function __construct(Client $model)
    {
        $this->model = $model;
    }
}

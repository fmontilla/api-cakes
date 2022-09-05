<?php

namespace App\Services\Cake;

use App\Repositories\Cake\CakeRepositoryContract;
use Exception;
use Illuminate\Support\Facades\DB;

class CakeService implements CakeServiceContract
{
    /**
     * @var CakeRepositoryContract
     */
    private $cakeRepository;

    /**
     * @param CakeRepositoryContract $cakeRepository
     */
    public function __construct(CakeRepositoryContract $cakeRepository)
    {
        $this->cakeRepository = $cakeRepository;
    }

    /**
     * @param $cakeRequest
     */
    public function store($cakeRequest)
    {
        DB::beginTransaction();
        try {
            $cakeRepository = $this->cakeRepository->store($cakeRequest);
            DB::commit();

            return $cakeRepository;
        } catch (Exception $e) {

        }
    }

    /**
     * @param $id
     * @param $cakeRequest
     */
    public function update($id, $cakeRequest)
    {
        DB::beginTransaction();
        try {
            $cakeRepository = $this->cakeRepository->updateById($cakeRequest, $id);
            DB::commit();

            return $cakeRepository;
        } catch (Exception $e) {

        }
    }

    /**
     * @param $id
     */
    public function show($id)
    {
        try {
            return $this->cakeRepository->getById($id);
        } catch (Exception $e) {

        }
    }

    public function list()
    {
        try {
            return $this->cakeRepository->paginate();
        } catch (Exception $e) {

        }
    }

    /**
     * @param $id
     */
    public function delete($id)
    {
        try {
            return $this->cakeRepository->delete($id);
        } catch (Exception $e) {

        }
    }
}

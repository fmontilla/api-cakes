<?php

namespace App\Services\Cake;

interface CakeServiceContract
{
    /**
     * @param $cakeRequest
     */
    public function store($cakeRequest);

    /**
     * @param $id
     * @param $cakeRequest
     */
    public function update($id, $cakeRequest);

    /**
     * @param $id
     */
    public function show($id);

    public function list();

    /**
     * @param $id
     */
    public function delete($id);
}

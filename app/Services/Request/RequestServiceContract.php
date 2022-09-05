<?php

namespace App\Services\Request;

interface RequestServiceContract
{
    /**
     * @param $request
     */
    public function store($request);

    public function list();
}

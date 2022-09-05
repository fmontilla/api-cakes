<?php

namespace App\Http\Controllers\Api\Cake;

use App\Http\Controllers\Controller;
use App\Http\Requests\CakeRequest;
use App\Services\Cake\CakeServiceContract;
use Illuminate\Http\Response;

class ListCakeController extends Controller
{
    private $cakeService;

    public function __construct(CakeServiceContract $cakeService)
    {
        $this->cakeService = $cakeService;
    }

    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $cakeService = $this->cakeService->list();

        return response()->json($cakeService, Response::HTTP_OK);
    }
}

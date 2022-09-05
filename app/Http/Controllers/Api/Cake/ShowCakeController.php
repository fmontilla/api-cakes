<?php

namespace App\Http\Controllers\Api\Cake;

use App\Http\Controllers\Controller;
use App\Http\Requests\CakeRequest;
use App\Http\Resources\Cake\CakeResource;
use App\Services\Cake\CakeServiceContract;
use Illuminate\Http\Response;

class ShowCakeController extends Controller
{
    private $cakeService;

    public function __construct(CakeServiceContract $cakeService)
    {
        $this->cakeService = $cakeService;
    }

    /**
     * Handle the incoming request.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function __invoke(int $id)
    {
        $cakeService = $this->cakeService->show($id);

        return response()->json(new CakeResource($cakeService), Response::HTTP_OK);
    }
}

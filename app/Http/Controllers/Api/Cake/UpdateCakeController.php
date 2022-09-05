<?php

namespace App\Http\Controllers\Api\Cake;

use App\Http\Controllers\Controller;
use App\Http\Requests\CakeRequest;
use App\Services\Cake\CakeServiceContract;
use Illuminate\Http\Response;

class UpdateCakeController extends Controller
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
     * @param  CakeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(int $id, CakeRequest $request)
    {
        $cakeService = $this->cakeService->update($id, $request->validated());

        return response()->json($cakeService, Response::HTTP_OK);
    }
}

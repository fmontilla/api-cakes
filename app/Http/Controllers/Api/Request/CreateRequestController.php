<?php

namespace App\Http\Controllers\Api\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestRequest;
use App\Services\Request\RequestServiceContract;
use Illuminate\Http\Response;

class CreateRequestController extends Controller
{
    private $requestService;

    public function __construct(RequestServiceContract $requestService)
    {
        $this->requestService = $requestService;
    }

    /**
     * Handle the incoming request.
     *
     * @param  RequestRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(RequestRequest $request)
    {
        $requestService = $this->requestService->store($request->validated());

        return response()->json($requestService, Response::HTTP_CREATED);
    }
}

<?php

namespace App\Http\Controllers\Api\Request;

use App\Http\Controllers\Controller;
use App\Http\Resources\Request\RequestCakeResource;
use App\Services\Request\RequestServiceContract;
use Illuminate\Http\Response;

class ListRequestController extends Controller
{
    private $requestService;

    public function __construct(RequestServiceContract $requestService)
    {
        $this->requestService = $requestService;
    }

    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $requestService = $this->requestService->list();

        return response()->json(RequestCakeResource::collection($requestService), Response::HTTP_OK);
    }
}

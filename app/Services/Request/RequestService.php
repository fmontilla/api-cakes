<?php

namespace App\Services\Request;

use App\Jobs\ProcessRequest;
use App\Repositories\Client\ClientRepositoryContract;
use App\Repositories\Request\RequestRepositoryContract;
use App\Services\Cake\CakeServiceContract;
use Exception;
use Illuminate\Support\Arr;

class RequestService implements RequestServiceContract
{
    /**
     * @var RequestRepositoryContract
     */
    private $requestRepository;

    /**
     * @var ClientRepositoryContract
     */
    private $clientRepository;

    /**
     * @var CakeServiceContract
     */
    private $cakeService;

    /**
     * @param RequestRepositoryContract $requestRepository
     */
    public function __construct(
        RequestRepositoryContract $requestRepository,
        ClientRepositoryContract $clientRepository,
        CakeServiceContract $cakeService,
    ) {
        $this->requestRepository = $requestRepository;
        $this->clientRepository = $clientRepository;
        $this->cakeService = $cakeService;
    }

    /**
     * @param $request
     */
    public function store($request)
    {
        try {
            $cake = $this->cakeService->show(Arr::get($request, 'cake_id'));
            $clientRepository = $this->clientRepository->getByAttribute('email', $request['email'])->first();

            if (!$clientRepository) {
                $this->clientRepository->store(Arr::only($request, 'email'));
            }

            $request['client_id'] = $clientRepository->id;
            $requestRepository = $this->requestRepository->store($request);
            $sellCake = $cake->quantity - $request['quantity'];
            $this->cakeService->update($request['cake_id'], ['quantity' => $sellCake]);
            $request['name'] = $cake->name;

            ProcessRequest::dispatch($request);

            return $requestRepository;
        } catch (Exception $e) {

        }
    }

    public function list()
    {
        try {
            return $this->requestRepository->paginate();
        } catch (Exception $e) {

        }
    }
}

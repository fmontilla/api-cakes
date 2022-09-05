<?php

namespace App\Http\Resources\Request;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\App;

class RequestCakeResource extends JsonResource
{
    /**
     * This will be changed in the future, we only need the mock at the moment!
     *
     * Transform the resource into an array.
     *
     * @param $request
     * @return array
     */
    public function toArray($request): array
    {
        $value = $this->cake->value * $this->quantity;
        return [
            'id' => $this->id,
            'name' => $this->cake->name,
            'quantity' => $this->quantity,
            'value' => 'R$ ' .number_format($value, 2, ',', '.'),
            'client' => [
                'id' => $this->client_id,
                'email' => $this->client->email
            ]
        ];
    }
}

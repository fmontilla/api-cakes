<?php

namespace App\Http\Resources\Cake;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\App;

class CakeResource extends JsonResource
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
        return [
            'id' => Arr::get($this, 'id'),
            'name' => Arr::get($this, 'name'),
            'weight' => Arr::get($this, 'weight'). ' gramas',
            'value' => 'R$ ' .number_format(Arr::get($this, 'value'), 2, ',', '.'),
            'quantity' => Arr::get($this, 'quantity'),
        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return[
            'id' => $this->id,
            'product_name' => $this->product_name,
            'product_price' => $this->product_price,
            'description' => $this->description,
        ];
    }
}

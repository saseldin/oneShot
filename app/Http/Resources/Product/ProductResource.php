<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "name"  => $this->name,
            "detail"  => $this->detail,
            "stock" => $this->price,
            "price" => $this->price,
            "discount"  => $this->discount,
        ];
    }
}

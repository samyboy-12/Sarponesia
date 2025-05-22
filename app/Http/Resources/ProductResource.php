<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->Product_ID,
            'name' => $this->Name,
            'description' => $this->Description,
            'price' => $this->Price,
            'stock' => $this->Stock,
            'category' => $this->category->Name ?? null,
            'image' => $this->Image_path,
            'tokopedia_link' => $this->Link_tokped,
        ];
    }
}

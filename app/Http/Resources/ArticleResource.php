<?php 

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
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
            'Article_ID' => $this->Article_ID,
            'Title' => $this->Title,
            'Content' => $this->Content,
            'Author' => $this->Author,
            'Category_ID' => $this->Category_ID,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

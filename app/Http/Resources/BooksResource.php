<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BooksResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
    return [
        'id' => $this->id,
        'isbn' => $this->isbn,
        'title' => $this->title,
        'description' => $this->description,
        'published_year' => $this->published_year,
        'created_at' => $this->created_at,
        'updated_at' => $this->updated_at,
    ];
    }
}

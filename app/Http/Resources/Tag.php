<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Interest as InterestResource;

class Tag extends JsonResource
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
      'id' => $this->id,
      'name' => $this->name,
      'interests' => InterestResource::collection($this->interests),
    ];
  }

  public function withResponse($request, $response)
  {
    $response->header('X-Value', 'True');
  }
}

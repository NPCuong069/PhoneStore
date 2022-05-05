<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AccessoryResource extends JsonResource
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
            'id'=>$this->id,
            'accesory_name'=>$this->accesory_name,
            'accesory_price'=>$this->accesory_price,
            'accesory_details'=>$this->accesory_details,
            'brand_id '=>$this->brand_id 
        ];
    }
}

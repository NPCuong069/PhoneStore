<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PhoneResource extends JsonResource
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
            'phone_name'=>$this->phone_name,
            'phone_price'=>$this->phone_price,
            'phone_details'=>$this->phone_details,
            'phone_brand'=>$this->phone_brand
        ];
    }
}

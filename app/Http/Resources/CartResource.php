<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CartResource extends JsonResource
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
            'cart_name'=>$this->cart_name,
            'phone'=>$this->phone,
            'cart_status'=>$this->cart_status,
            'matp'=>$this->matp,
            'maqh'=>$this->maqh,
            'xaid'=>$this->xaid,
            'cart_address'=>$this->cart_address
        ];
    }
}

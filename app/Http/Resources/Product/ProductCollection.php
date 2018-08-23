<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;


class ProductCollection extends JsonResource
{
    
    public function toArray($request)
    {
        // return parent::toArray($request);
        $data = [
            'name' => $this->name,
            'description' => $this->detail,
            'totalPrice' => round(( 1 - ($this->discount/100)) * $this->price,2),
            'rating' => $this->reviews->count() > 0 ? round($this->reviews->sum('star')/$this->reviews->count(),2) : 'No rating yet',
            'href' => [
                        'link' => route('products.show',$this->id),
                        'reviews'=> route('reviews.index',$this->id),
                    ]
        ];
        return $data; 
    }
}

<?php

namespace App\model;

use App\model\Product;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
 	public function product()
 	{
    	return $this->belongsTo(Product::class);
 	}
}

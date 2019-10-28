<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	// Set need parameters for Product:
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = ['product_name', 'product_code', 'product_price', 'product_info', 'stock', 'image', 'spl_price', 'category'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}

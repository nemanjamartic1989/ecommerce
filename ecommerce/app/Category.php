<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{	
	// Set necessary parameters for Categories:
    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $fillable = ['name'];

    public function products()
    {
        return $this->hasMany('App\Product');
    }
}

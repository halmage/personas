<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = ['image','code','name','content']; 

    /**
    * [boot description]
    */
    protected static function boot()
    {  
        parent::boot();

        static::deleting(function($product)
        {            
            $image_path = str_replace('storage', 'public', $product->image);
            Storage::delete($image_path);
        });
    } 

    public function tags()
   {
      return $this->belongsToMany('App\Models\Tag');
   }
}

<?php

namespace App\Repositories\Admin\Product;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

/* Importando modelos */
use App\Models\Product;

class ProductRepositories implements ProductInterface{

	public function imageStore($request)
	{
		if (!empty($request->file('image'))) {
    		$image = Storage::url($request->file('image')->store('product','public'));	
    	}else {
    		$image = null;
    	}
    	return $image;
	}

	/* Registrando usuarios */
	public function createdProduct($request){
		$product = Product::create([
			'image' => self::imageStore($request),
			'code' => $request->code,
			'name' => $request->name
		]);
		$product->tags()->sync($request->tags);
	}

	public function imageUpdate($product,$request)
    {
        if (!empty($request->file('image'))) {
            $image = Storage::url($request->file('image')->store('product','public')); 
            $image_path = str_replace('storage', 'public', $product->image);
            Storage::delete($image_path);
        }else {
            $image = $product->image;
        }
        return $image;
    }

	/* Actualizando producto */
	public function updated($product, $request){
		$product->update([
			'image' => self::imageUpdate($product,$request),
			'code' => $request->code,
			'name' => $request->name
		]);
		$product->tags()->sync($request->tags);
	}
}
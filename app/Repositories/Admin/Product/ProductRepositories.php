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
		Product::create([
			'image' => self::imageStore($request),
			'code' => $request->code,
			'name' => $request->name
		]);
	}

	/* Actualizando producto */
	public function updated($product, $request){
		$product->update([
			'image' => self::imageStore($request),
			'code' => $request->code,
			'name' => $request->name
		]);
	}
}
<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/* Importando modelos */
use App\Models\Product;

class ProductController extends Controller
{
    
	public function index(){
		return view('user.product.index', ['products' => Product::all()]);
	}

}

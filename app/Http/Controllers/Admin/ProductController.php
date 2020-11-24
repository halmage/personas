<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/* Importando repositorio */
use App\Repositories\Admin\Product\ProductRepositories;

/* Llamaindo al modelo */
use App\Models\Product;

class ProductController extends Controller
{	
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ProductRepositories $product)
    {
        $this->product = $product;
    }

    public function index(){
    	return view('admin.product.index',['products' => Product::all()]);
    }

    public function create(){
    	return view('admin.product.create');
    }

    public function store(Request $request){
    	$this->product->createdProduct($request);
    	return redirect()->route('product.index');
    }

    public function show(Product $product){
    	return view('admin.product.show',['product' => $product]);
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect()->route('product.index');
    }
}

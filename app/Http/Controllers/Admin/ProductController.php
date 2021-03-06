<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/* Importando repositorio */
use App\Repositories\Admin\Product\ProductRepositories;

/* Llamaindo al modelo */
use App\Models\Tag;
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

    public function index()
    {
    	return view('admin.product.index',['products' => Product::all()]);
    }

    public function create()
    {        
    	return view('admin.product.create',['tags' => Tag::all()]);
    }

    public function store(Request $request)
    {
    	$this->product->createdProduct($request);
    	return redirect()->route('admin-product.index');
    }

    public function show(Product $product)
    {
    	return view('admin.product.show',['product' => $product]);
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin-product.index');
    }

    public function edit(Product $product)
    {
        return view('admin.product.edit',['product' => $product,
                                          'tags' => Tag::all()
                                         ]);
    }

    public function updated(Product $product, Request $request)
    {
        $this->product->updated($product,$request);
        return redirect()->route('admin-product.index');
    }
}

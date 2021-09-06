<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $products = Product::all();
        return ProductResource::collection($products);
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return new ProductResource($product);
    }

    public function featuredProducts() {
        $featuredProducts = Product::where('featured', 1)->paginate();
        return ProductResource::collection($featuredProducts);
    }

    public function productByCategory(Category $category) {
        $products = $category->products()->paginate();
        return ProductResource::collection($products);
    }
}

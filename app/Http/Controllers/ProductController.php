<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('company')->latest()->get()->groupBy('featured');
        // return $products;
        // $tags = Tag::all();
        return view('products.index', [
            'featuredProducts' => $products[1],
            'products' => $products[0],
            'tags' => Tag::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $attributes =  $request->validate([
            'name' => ['required'],
            'price' => ['required'],
            'featured' => ['required'],
            'url' => ['required', 'active_url'],
            'tags' => ['nullable'],

        ]);

        $attributes['featured'] =  $request->has('featured');
        $product =  Auth::user()->company->products()->create(Arr::except($attributes, 'tags'));

        if ($attributes['tags'] ?? false) {
            foreach (explode(',', $attributes['tags']) as $tag) {
                $product->tag($tag);
            }
        }
        return redirect('/');
    }

}
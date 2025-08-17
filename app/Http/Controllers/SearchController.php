<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke()
    {
        $products = Product::with(['company', 'tags'])->where('name', 'LIKE', '%' . request('q') . '%')->get();
        return view('results', ['products' => $products]);
    }
}

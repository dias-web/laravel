<?php

namespace App\Http\Controllers;

use App\Http\Resources\Product\ProductResourse;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return ProductResourse::collection(Product::all())->resolve();
    }
}

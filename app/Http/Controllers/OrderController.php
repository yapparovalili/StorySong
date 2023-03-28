<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Theme;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class OrderController extends Controller
{
    public function get_products(){
        $products = Product::all();
        return response($products, 200);
    }

    public function get_themes(){
        $themes = Theme::with('questions')->get();
        return response($themes, 200);
    }
}

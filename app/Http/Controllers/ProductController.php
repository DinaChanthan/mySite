<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producgt;
class ProductController extends Controller
{
    public function getProduct()
    {
    	$products=Producgt::all();
    	return view('hello', compact('products'));
    }
}

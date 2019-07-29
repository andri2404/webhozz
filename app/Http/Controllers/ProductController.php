<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
    public function index()
    {
        $product = Product :: all();
        return view ('product.index', compact ('product'));
    }

    public function create (){
        return view ('product.create');
    }
    public function ram(){
        //insert data
        Product :: create ([
            'name' => request ('name'),
            'supplier' => request ('supplier'),
            'price' => request ('price'),
            
        ]);

        return redirect ('/product');
    }
}

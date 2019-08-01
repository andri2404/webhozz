<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product :: all();
        return view ('product.index', compact ('product'));
    }

    public function create (){

        $category = Category::all();
        return view ('product.create', compact('category'));
    }

   
    public function ram(){
        //insert data
        Product :: create ([
            'category_id'=>request('category_id'),
            'name' => request ('name'),
            'supplier' => request ('supplier'),
            'price' => request ('price'),   
            
        ]);

        return redirect ('/product');
    }
    public function edit($id) {
        $product = Product::find($id);
        $category = Category ::all();
        return view ('product.edit', compact ('product', 'category'));
    }

    public function update ($id)
    {
        // query ke database buat ambil category dengan id = $id
        $product = Product ::find($id);

        // update data
        $product->update([
            'name' => request ('dari_form')
            ]);

            //redirect
            return redirect ('/product');
    }
    
    // delete data
    public function destroy($id){
        $product= Product::find($id);
        $product->delete();

        //redirect
        return redirect ('/product');
    }
}

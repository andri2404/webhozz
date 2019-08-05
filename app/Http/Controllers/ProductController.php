<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    
    public function index()
    {

        // kalo searchnya ada isinya
        if(request('search') != ''){
            $product = Product::where ('name', 'like', '%'.request('search').'%')->get();
        }else{
            $product = Product :: all();
        }
        
        return view ('product.index', compact ('product'));
        
    }
       
    // double public cut ajaaaa
    //public function index()
    //{
       // $product = Product :: all();
       // return view ('product.index', compact ('product'));
    //}

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
            'other' => request ('other'),
            
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
            'category_id'=>request('category_id'),
            'name' => request ('dari_form1'),
            'supplier' => request ('dari_form2'),
            'price' => request ('dari_form3'),
            'other' => request ('dari_form4'),
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

    // buat export data

    public function export(){
        Excel::create('product', function($excel) {
            $excel->sheet('Sheet', function($sheet) {
                // query untuk ambil data dari database product
                $products = product::all();
                $sheet->loadview('excel.product', compact('products'));
                                       
            });
         
        })  ->download('txt');

        // mengembalikan ke form index

        return redirect('/product');
    }

        public function import()
	{
		$file = request()->file('file');
		Excel::load($file, function ($reader) {
			$results = $reader->get();
			foreach ($results as $result) {
				Product::create([
					'category_id' => $result->kategori,
					'name' => $result->name,
                    'supplier' => $result->supplier,
                    'price' => $result->price,
                    'other' => $result->other,
                    
				]);
			}
		});
		return redirect()->route('product.index');


    }
}

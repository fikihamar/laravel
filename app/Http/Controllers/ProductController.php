<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Alert;

class ProductController extends Controller
{
    public function data()
    {
        $data = Product::all();
        return view('product.data', ['productData' => $data]);
    }
    public function add()
    {
        $CategoryData =Category::all();
        return view('product.add', [
            'categoryData'=>$CategoryData
        ]);
    }
    public function store(Request $request)
    {
        $data=new Product;
        $data->name=$request->name;
        $data->stock=$request->stock;
        $data->category_id=$request->category;
        $data->save();
        Alert::success('Sukses', 'Tambah Data Produk Sukses');
        return redirect()->route('product-data');
    }
    public function edit($id)
    {
        $categoryData=Category::all();
        $data=Product::findOrFail($id);
        
        return view('product.edit',[
            'data'=>$data,
            'categoryData'=>$categoryData
        ]);
    }
    public function save(Request $request, $id)
    {
        $data=Product::findOrFail($id);
        $data->name=$request->name;
        $data->stock=$request->stock;
        $data->category_id=$request->category;
        $data->save();
        Alert::success('Edit', 'Tambah Data Produk Sukses');
        return redirect()->route('product-data');
    }
    public function delete($id)
    {
        $data = Product::findorFail($id);
        $data->delete();
        return redirect()->route('product-data');
    }
}

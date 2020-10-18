<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function data()
    {
        $data=Category::all();
        return view('category.data',['CategoryData'=>$data]);
    }
    public function add()
    {
        return view('category.add');
    }
    public function store(Request $request){
        $data=new Category;
        $data->name=$request->name;
        $data->save();

        return redirect()->route('category-data');
    }
    public function edit($id){
        $data=Category::findOrFail($id);
        return view('category.edit',[
            'data'=>$data
        ]);
    }
    public function save(Request $request,$id){
        //SOON
        $data=Category::findOrFail($id);
        $data->name=$request->name;
        $data->save();
        return redirect()->route('category-data');
    }
    public function delete($id)
    {
        $data = Category::findOrFail($id);
        $data->delete();
        return redirect()->route('category-data');
    }
}

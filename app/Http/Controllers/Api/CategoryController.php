<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return Category::all();
    }
    public function store(Request $request){
//        $request->validate([
//            'name_uz'=>'required|string',
//            'name_ru'=>'required|string',
//            'name_en'=>'required|string',
//            'parent_id'=>'required',
//            'image'=>'required'
//        ]);
        $data= new Category();
//        if($request->hasfile('image')){
//            $file= $request->file('image');
//            $filename = date('YmdHi').$file->getClientOriginalName();
//            $file->move(public_path('asset'),$filename);
//            $data['name_uz']=$request->name_uz;
//            $data['name_ru']=$request->name_ru;
//            $data['name_en']=$request->name_en;
//            $data['parent_id']=$request->parent_id;
//            $data['image']=$filename;
//        }


        $data->name_uz = $request->name_uz;
        $data->name_ru = $request->name_ru;
        $data->name_en = $request->name_en;
        $data->image = $request->image;
        $data->parent_id = $request->parent_id;




        $data->save();
        return response()->json('Muvofaqiyatli yaratildi!',201);


    }
    public function update(Request $request, Category $category){

        $category->name_uz = $request->name_uz;
        $category->name_ru = $request->name_ru;
        $category->name_en = $request->name_en;
        $category->desc_uz = $request->desc_uz;
        $category->desc_ru = $request->desc_ru;
        $category->desc_en = $request->desc_en;
        $category->image = $request->image;
        $category->category_id = $request->category_id;

        $category->update();
        return response()->json('yangilandi',200);
    }
    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json('ochirildi',200);
    }
}

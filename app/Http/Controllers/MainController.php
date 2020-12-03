<?php

namespace App\Http\Controllers;

use App\category;
use App\flowers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MainController extends Controller
{
    //
    public function muncul_homepage(){ 
        $category = category::all();
        return view('homepage',['category'=>$category]);
    }

    public function muncul_flower($id){
        $flower = flowers::where('Category_id',$id)->get();
        return view ('flower',  ['flowers'=>$flower]);
    }

    public function muncul_detail($id){
        $flower = flowers::where('id', $id )->first();
        return view ('detailPage', ['flowers'=>$flower]);
    }

    public function atur_categori(){
        $flower = category::all();
        return view ('adminproduct', ['flowers'=>$flower]);
    }
    
    public function muncul_update($id){
        $update = flowers::where('id',$id)->first();
        return view('update', ['flowers'=>$update]);
    }
    
    public function tambah_flower(Request $request){
        $validator = Validator::make($request->all(), [
            'category'=>'required',
            'Flowers_Name' => 'required|unique:flowers|min:5',
            'flowerprice' => 'required|numeric|min:50000',
            'description' => 'required|min:20',
            'flowerimage' => 'required|'
        ]);
        if ($validator->fails()) {
            return redirect('add')
                        ->withErrors($validator)
                        ->withInput();
        }
        $image = $request->file('flowerimage');
        $image->move(public_path('asset/'.strtolower(Str::replaceLast(' ','',$request->category))),$image->getClientOriginalName());
        $category_id = category::where('CategoryName','like','%'.$request->category.'%')->first();
        DB::table('flowers')->insert(
            ['Category_id' => $category_id->id, 'Flowers_Name' => $request->Flowers_Name,'Flowers_Price'=>$request->flowerprice,'description'=>$request->description,'Flowers_Image'=>strtolower(Str::replaceLast(' ','',$request->category)).'/'.$image->getClientOriginalName()]
        );
        $category = category::all();

        return redirect('/')->with(['category'=>$category]);
    }

    public function tambah_update_category(Request $request){
        $validator = Validator::make($request->all(), [
            'category'=>'required',
            'Flowers_Name' => 'required|unique:flowers|min:5',
            'flowerprice' => 'required|numeric|min:50000',
            'description' => 'required|min:20',
            'flowerimage' => 'required|'
        ]);
        if ($validator->fails()) {
            return redirect('/update/'.$request->id)
                        ->withErrors($validator)
                        ->withInput();
        }
        $image = $request->file('flowerimage');
        $image->move(public_path('asset/'.strtolower(Str::replaceLast(' ','',$request->category))),$image->getClientOriginalName());
        $category_id = category::where('CategoryName','like','%'.$request->category.'%')->first();
        DB::table('flowers')->where('id','=',$request->id)->update(
            ['Category_id' => $category_id->id, 'Flowers_Name' => $request->Flowers_Name,'Flowers_Price'=>$request->flowerprice,'description'=>$request->description,'Flowers_Image'=>strtolower(Str::replaceLast(' ','',$request->category)).'/'.$image->getClientOriginalName()]
        );
        $category = category::all();

        return redirect('/')->with(['category'=>$category]);
    }
}

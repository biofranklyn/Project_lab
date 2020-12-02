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

    public function tambah_flower(Request $request){
        $validator = Validator::make($request->all(), [
            'category'=>'required',
            'Flowers_Name' => 'required|unique:flowers|min:5',
            'flowerprice' => 'required|numeric|max:50000',
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
}

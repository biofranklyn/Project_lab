<?php

namespace App\Http\Controllers;

use App\category;
use App\flowers;
use App\shoping;
use App\transaction;
use App\User;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\cookie;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MainController extends Controller
{
    public function muncul_homepage(){ 
        $category = category::all();
        return view('homepage',['category'=>$category]);
    }

    public function muncul_flower($id){
        $flower = flowers::where('Category_id',$id)->paginate(8);
        $category = category::where('id',$id)->first();
        return view ('flower',  ['flowers'=>$flower, 'category'=>$category]);
    }

    public function muncul_detail($id){
        $flower = flowers::where('id', $id )->first();
        return view ('detailPage', ['flowers'=>$flower]);
    }

    public function UpdateCategory($id){
        $category=category::where('id',$id)->first();
        return view('updateCategory',['category'=>$category]);
    }

    public function muncul_cart(){
        $flower = shoping::all();
        return view ('cart',  ['flowers'=>$flower]);
    }

    public function atur_categori(){
        $flower = category::all();
        return view ('adminproduct', ['flowers'=>$flower]);
    }
    
    public function muncul_update($id){
        $update = flowers::where('id',$id)->first();
        return view('update', ['flowers'=>$update]);
    }

    public function muncul_td($id){
        $transaction = transaction::where('User_id',$id)->get();
        return view ('transactionDetail', ['transaction'=>$transaction]);
    }

    function muncul_search(Request $request){
        $flower = flowers::where('Flowers_Name', 'LIKE', '%'. $request->search.'%'
        )->where('Category_id', '=', $request->id)->paginate(8);
        $category = category::where('id',$request->id)->first();
        return view('flower', ['flowers'=> $flower, 'category'=>$category]);
    }

    public function hapus($id){
        DB::table('flowers')->where('id',$id)->delete();
        return redirect('/');
    }

    public function hapus_category($id){
        DB::table('flowers')->where('Category_id',$id)->delete();
        return redirect('/');
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
            ['Category_id' => $category_id->id,
            'Flowers_Name' => $request->Flowers_Name,
            'Flowers_Price'=>$request->flowerprice,
            'description'=>$request->description,
            'Flowers_Image'=>strtolower(Str::replaceLast(' ','',$request->category)).'/'.$image->getClientOriginalName()]
        );
        $category = category::all();

        return redirect('/add')->with(['category'=>$category]);
    }
    
    public function tambah_update_flower(Request $request){
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
        DB::table('flowers')->where('id','=',$request->id)->update(
            ['Category_id' => $category_id->id, 
            'Flowers_Name' => $request->Flowers_Name,
            'Flowers_Price'=>$request->flowerprice,
            'description'=>$request->description,
            'Flowers_Image'=>strtolower(Str::replaceLast(' ','',$request->category)).'/'.$image->getClientOriginalName()]
        );
        $category = category::all();

        return redirect('/')->with(['category'=>$category]);
    }

    public function tambah_update_category(Request $request){
        $validator = Validator::make($request->all(), [
            'CategoryName' => 'required|unique:categoryflowers|min:5',
            'category_image' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect('/updatecategory/'.$request->id)
                        ->withErrors($validator)
                        ->withInput();
        }
        $image = $request->file('category_image');
        $image->move(public_path('asset/'.strtolower(Str::replaceLast(' ','',$request->category))),$image->getClientOriginalName());
        $category_id = category::where('CategoryName','like','%'.$request->category.'%')->first();
        DB::table('categoryflowers')->where('id','=',$request->id)->update(
            ['id' => $category_id->id, 'CategoryName' => $request->CategoryName,'CategoryImage'=>strtolower(Str::replaceLast(' ','',$request->category)).'/'.$image->getClientOriginalName()]
        );
        $category = category::all();

        return redirect('/')->with(['category'=>$category]);
    }

    function cart(Request $request, $User_id, $flower_id )
    {
        $flowers = flowers::where('id',$flower_id)->first();
        $users = User::where('id',$User_id)->first();
        $validation = Validator::make($request->all(),[    
            'qty'=>'required|min:1'
            
            
        ]);
        if ($validation->fails()) {
            return redirect('/detail/'.$request->id)
                ->withErrors($validation)
                ->withInput();
        }
        
        DB::table('shopingcart')->insert(
        [
            'Quantity'=>$request->qty,
            'Flowers_Image'=>$flowers->Flowers_Image,
            'Flowers_Name'=>$flowers->Flowers_Name,
            'Flowers_Price'=>$flowers->Flowers_Price,
            'User_id'=>$users->id,
            'flower_id'=>$flowers->id,
            'Subtotal'=>$flowers->Flowers_Price * $request->qty
            
        ]);
        
       return redirect('/cart/'.$flowers->id);
    }

    function addtransaction(Request $request, $User_id)
    {

        $carts = shoping::where('User_id',$User_id)->get();
        foreach ($carts as $cart) {
        
        $transaction = new transaction;
        $transaction->Flower_id = $cart->id;
        $transaction->Date = Carbon::now();;
        $transaction->transactionTotal = 0;
        
        foreach ($carts as $total) {

            $transaction->transactionTotal += $total->Subtotal;
        }
        
        $transaction->User_id = $User_id;
        $transaction->Flowers_Name = $cart->Flowers_Name;
        $transaction->Flowers_Price = $cart->Flowers_Price;
        $transaction->Flowers_Image = $cart->Flowers_Image;
        $transaction->Quantity = $cart->Quantity;
        $transaction->Subtotal = $cart->Subtotal;
        $transaction->save();
        $cart->delete(); 
    }

       return redirect('/');
    }


    function register(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'username'=>'required|string',
            'email'=>'required|email|unique:users',
            'Password'=>'required|confirmed|min:6',
            'Password_confirmation'=>'required_with:Password',
            'Address'=>'required|string|min:10',
            'Gender'=>'required|in:Male,Female',
            'DOB'=>'required'
            ]);
        if ($validator->fails()) {
            return redirect('/register')
                ->withErrors($validator)
                ->withInput();
        }
        DB::table('users')->insert(
            [
                'name'=>$request->username,
                'email'=>$request->email,
                'password'=>bcrypt($request->Password),
                'address'=>$request->Address,
                'gender'=>$request->Gender,
                'Date_Of_Birth'=>$request->DOB,
                'isAdmin'=>'0'
                ]

        );
        return redirect('/login');
    }

    function login(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'email'=>'required|email',
            'password'=>'required|min:6',
            ]);
        if ($validator->fails()) {
            return redirect('/login')
                ->withErrors($validator)
                ->withInput();
        }

        $remember = $request->remember ? true : false;
        if (Auth::attempt(['email'=>$request->email, 'password'=>$request->password], $remember)){
            $minute = 10080;
            $rememberme = Auth::getRecallerName();
            cookie::queue($rememberme, cookie::get($rememberme), $minute );
            return redirect('/');
        }

        return redirect('/login');
    }

    function logout(){
        Auth::logout();
        return redirect('/login');
    }
}

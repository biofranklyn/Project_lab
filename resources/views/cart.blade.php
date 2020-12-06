@extends('layout/header')

@section('style') 
    <style>
        body{
            background-color: #fdcfdf;
        }
        .content2{
            background-color: #ba7967;
        }
        .img{
            max-width: 220px;
        }

        .side{
            display: inline-block;
        }
        .button{
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
        }

    </style>
    @section('containers')
        <div class="containers">
            <div>
                <div>
                    <div class="tulisan text-center" style="margin-top: 20px">
                        <h1>My Cart</h1>
                    </div>
                    <div class="mt-5 mx-5 d-flex justify-content-center flex-colums">
                            <div class="content2 px-4 py-2">
                                <div class="side col-2">
                                    <img class="img" src="{{asset('asset/freshflower/bunga bangke.jpeg' ) }}" alt="bunga bangke.jpeg">
                                </div>
                                <div class="side col-2" style="margin-left: 100px">
                                    <p class="text mt-3">Bunga Bangke</p>
                                </div>
                                <div class="side col-2">
                                    <p class="text mt-n2">Rp. 200000000</p>
                                </div>
                                <div class="side col-1">
                                    <label for="qty">Quantity</label>
                                    <input type="number" name="qty" style="border: none; border-radius: 2px; padding: 5.9px; width: 80px;">
                                </div>
                                <div class="side col-1">
                                    <input class="tombol btn btn-primary py-2 mt-2" type="submit" value="Update" style="font-size: 14px; margin-bottom: 10px; margin-left: 20px">
                                </div>
                            </div>
                    </div>
                    <div class="button mt-3">
                        <input type="submit" class="btn btn-danger" value="Checkout"> 
                    </div>
                </div>
            </div>
    @endsection 
@endsection     


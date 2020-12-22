@extends('layout/header')

@section('Style') 
    <style>
        body{
            background-color: #fdcfdf;
        }
        .tulisan{
           
        }
        .welcome{
            font-size: 24px;
            font-style: italic;
        }
        .img{
            max-width: 220px;
        }

        a{
            color: black;
        }
        .tombol{
            font-size: 11px; 
            margin-left: 115px;
        }

    </style>
    @section('containers')
        <div class="containers">
                    <div class="row mt-2 mx-auto d-flex justify-content-center">
                            <div class="col-4 py-2 px-0 text-center ">
                                <img class="img" width='220px' src="{{asset('asset/'.$flowers->Flowers_Image ) }}" alt="{{$flowers->Flowers_Image }}">
                            </div>
                            <div class="col-3 py-2 px-0 text-center ">
                                <p class="text mt-3">{{$flowers->Flowers_Name}}</p>
                                <p class="text mt-n2" style="color: #8a610b">Rp. {{$flowers->Flowers_Price}}</p>
                                <p class="text">{{$flowers->description}}</p>
                                
                        @if (Auth::check() && Auth::user()->isAdmin == 0)
                        <form action="/cart/{{Auth::user()->id}}/{{$flowers->id}}" method="POST">
                            @csrf
                        <div class="quantity">
                            <span>Quantity : {{$flowers->Quantity}}</span>
                            <input class="tombol1" type="number" name="qty" style="border-radius: 2px; padding: 5px; width: 80px; margin-left: 50px"> 
                            <br>
                            <input class="tombol btn btn-primary py-2 mt-2" type="submit" value="Add to Cart">
                        </div>
                        </form>
                        @endif
                            </div>
                    </div>
    @endsection 
@endsection     


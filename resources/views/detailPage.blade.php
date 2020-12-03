@extends('layout/header')

@section('style') 
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

    </style>
    @section('containers')
        <div class="containers">
                    <div class="row mt-2 mx-auto d-flex justify-content-center">
                            <div class="col-4 py-2 px-0 text-center ">
                                        <img class="img" src="{{asset('asset/'.$flowers->Flowers_Image ) }}" alt="{{$flowers->Flowers_Image }}">
                            </div>
                            <div class="col-3 py-2 px-0 text-center ">
                                <p class="text mt-3">{{$flowers->Flowers_Name}}</p>
                                <p class="text mt-n2">Rp. {{$flowers->Flowers_Price}}</p>
                                <p class="text">{{$flowers->description}}</p>
                            </div>
                    </div>
    @endsection 
@endsection     


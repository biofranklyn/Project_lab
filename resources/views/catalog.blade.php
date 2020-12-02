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
        .content2{
            background-color: #fca3cc;
        }
        .img{
            max-width: 250px;
        }

        a{
            color: black;
        }

    </style>
    @section('containers')
        <div class="containers">
            <div>
                <div>
                    <div class="tulisan text-center" style="margin-top: 20px">
                        <p style="font-style: italic; font-size: 150%">Welcome to Flowelto Shop</p>
                    </div>
                    @foreach ($category->chunk(4) as $categoryduaan)
                    <div class="row  mt-5 mx-5 d-flex justify-content-center">
                        @foreach ($categoryduaan as $categorysatuan)
                            <div class="col-2 content2 py-2 px-0 mx-1 text-center ">
                                <a href="">
                                        <img class="img" src="{{asset('asset/'.$categorysatuan->CategoryImage ) }}" alt="{{$categorysatuan->CategoryImage }}">
                                        <p class="text mt-3">{{$categorysatuan->CategoryName}}</p>
                                 </a>
                            </div>
                        @endforeach
                    </div>    
                @endforeach
                </div>
            </div>
    @endsection 
@endsection     


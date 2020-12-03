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
            max-width: 220px;
        }

        a{
            color: black;
        }

    </style>
    @section('containers')
        <div class="containers">
            <div>
                <div>
                    <div class="tulisan text-center">
                        <p style="font-style: italic; font-size: 150%;">Welcome to Flowelto Shop</p>
                        <h5>The Best Flower Shop in Binus Univeristy</h5>
                    </div>
                    @foreach ($flowers->chunk(4) as $flowerempat)
                    <div class="row mt-2 mx-5 d-flex justify-content-center">
                        @foreach ($flowerempat as $flowersatuan)
                            <div class="col-2 content2 py-2 px-0 mx-1 text-center ">
                                <a href="/detail/{{$flowersatuan->id}}">
                                        <img class="img" src="{{asset('asset/'.$flowersatuan->Flowers_Image ) }}" alt="{{$flowersatuan->Flowers_Image }}">
                                        <p class="text mt-3">{{$flowersatuan->Flowers_Name}}</p>
                                        <p class="text mt-n2">{{$flowersatuan->Flowers_Price}}</p>
                                 </a>
                            </div>
                        @endforeach
                    </div>    
                @endforeach
                </div>
            </div>
    @endsection 
@endsection     


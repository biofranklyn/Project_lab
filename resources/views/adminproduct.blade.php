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
        .btn{
            background-color: red;
        }
        .tombol{
            background-color: #007bff;
        }

    </style>
    @section('containers')
        <div class="containers">
            {{-- manage category --}}
            <div>
                <div>
                    <div class="tulisan text-center">
                        <p style="font-style: italic; font-size: 150%;">Manage Categories</p>
                    </div>
                    @foreach ($flowers->chunk(4) as $flowerempat)
                    <div class="row mt-2 mx-5 d-flex justify-content-center">
                        @foreach ($flowerempat as $flowersatuan)
                            <div class="col-2 content2 py-2 px-0 mx-1 text-center ">
                                <img class="img" src="{{asset('asset/'.$flowersatuan->CategoryImage ) }}" alt="{{$flowersatuan->Flowers_Image }}">
                                <p class="text mt-3">{{$flowersatuan->CategoryName}}</p>
                                <input class="btn btn-primary" type="submit" value="Delete">
                                <input class="tombol btn btn-primary" type="submit" value="Edit">
                            </div>
                        @endforeach
                    </div>    
                @endforeach
                </div>
            </div>
    @endsection 
@endsection     


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
                                <a href="/flower/hapus/{{ $flowersatuan->Category_id }}"class="btn btn-primary" style="font-size: 11px">Delete Category</a>
                                <a href="/updatecategory/{{$flowersatuan->id}}" class="tombol btn btn-primary" style="font-size: 11px">Update Category</a>
                            </div>
                        @endforeach
                    </div>    
                @endforeach
                </div>
            </div>
    @endsection 
@endsection     


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
        .scrolltable{
            border: #929292
        }

    </style>
    @section('containers')
        <div class="containers">
            <div>
                <div>
                    <div class="tulisan text-center">
                        <h1 class="text mt-3">
                            {{$category->CategoryName}}
                        </h1>
                    </div>
                    
                        <form action="/flower/search" method="GET">
                            @csrf
                        <div style="margin-top: 20px">
                            <label for="category" class="col-sm-2 col-form-label"></label>
                            <select name="category" id="category" style="margin-left: 15px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; padding: 10px 20px; border: none; border-radius: 5px" required>
                                <option name="name" value="Name" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Name</option>
                                <option name="price" value="Price" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Price</option>
                            </select>
                                <input type="hidden" value='{{$category->id}}' name="id">
                                <input type="search" placeholder="Search" style="border: none; padding: 9px 20px; border-radius: 5px" name="search">
                                <button type="submit" style="padding: 9px 13px; border: none; border-radius: 5px; background-color: #3d7ea6; color: white; margin-left: 15px">Search</button>
                            </form>
                        </div>
                <table class="tableepisode">
                    @if (count($flowers) > 0 )
                        @foreach ($flowers->chunk(4) as $flowerempat)
                        <div class="row mt-2 mx-5 d-flex justify-content-center">
                            @foreach ($flowerempat as $flowersatuan)
                                <div class="col-2 content2 py-2 px-0 mx-1 text-center ">
                                    <a href="/detail/{{$flowersatuan->id}}">
                                            <img class="img" src="{{asset('asset/'.$flowersatuan->Flowers_Image ) }}" alt="{{$flowersatuan->Flowers_Image }}">
                                            <p class="text mt-3">{{$flowersatuan->Flowers_Name}}</p>
                                            <p class="text mt-n2" style="color: #8a610b">Rp.{{$flowersatuan->Flowers_Price}}</p>
                                    </a>
                                    @if (Auth::check() && Auth::user()->isAdmin == 1)
                                        <a href="/flower/hapus/{{ $flowersatuan->id }}"class="btn btn-primary" style="font-size: 11px">Delete Flower</a>
                                        <a href="/update/{{$flowersatuan->id}}" class="btn btn-primary" style="font-size: 11px">Update Flower</a>
                                    @endif
                                </div>
                            @endforeach
                        </div>    
                        @endforeach
                        <div class="scrolltable mt-2 mx-auto w-50 h-50 d-flex justify-content-end">
                            {{$flowers->Links()}}
                        </div>
                    @else
                    <div class="row mt-5 mx-5 d-flex justify-content-center">
                        <h1>
                            No flower
                        </h1>
                    </div>
                    @endif
                </table>
                </div>
            </div>
        </div>
    @endsection 
@endsection     


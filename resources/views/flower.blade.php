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
                        <h1 class="text mt-3">
                            {{-- {{$category->CategoryName}} --}}
                        </h1>
                    </div>
                    <div style="margin-top: 20px">
                        <label for="category" class="col-sm-2 col-form-label"></label>
                        <select name="category" id="category" style="margin-left: 15px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; padding: 10px 20px; border: none; border-radius: 5px" required>
                            <option value="Blossom Box" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"> Name</option>
                            <option value="Bouquet" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Price</option>
                        </select>
                        <input type="search" placeholder="Search" style="border: none; padding: 9px 20px; border-radius: 5px">
                        <button type="submit" style="padding: 9px 13px; border: none; border-radius: 5px; background-color: #3d7ea6; color: white; margin-left: 15px">Search</button>
                    </div>
                    @if (count($flowers) > 0 )
                    @foreach ($flowers->chunk(4) as $flowerempat)
                    <div class="row mt-2 mx-5 d-flex justify-content-center">
                        @foreach ($flowerempat as $flowersatuan)
                            <div class="col-2 content2 py-2 px-0 mx-1 text-center ">
                                <a href="/detail/{{$flowersatuan->id}}">
                                        <img class="img" src="{{asset('asset/'.$flowersatuan->Flowers_Image ) }}" alt="{{$flowersatuan->Flowers_Image }}">
                                        <p class="text mt-3">{{$flowersatuan->Flowers_Name}}</p>
                                        <p class="text mt-n2" style="color: #f0a500">Rp.{{$flowersatuan->Flowers_Price}}</p>
                                 </a>
                            </div>
                        @endforeach
                    </div>    
                @endforeach
                @else
                <div class="row mt-5 mx-5 d-flex justify-content-center">
                    <h1>
                        No flower
                    </h1>
                </div>
                @endif
                </div>
            </div>
        </div>
    @endsection 
@endsection     


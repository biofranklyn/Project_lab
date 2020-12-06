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
                                        <img class="img" src="{{asset('asset/freshflower/bunga bangke.jpeg') }}" alt="bunga bangke.jpeg">
                            </div>
                            <div class="col-3 py-2 px-0 text-left ">
                                <h1 class="text mt-3">bunga bangke</h1> <br>
                                <strong class="text mt-n2" style="color: #f0a500">Rp. 200000000</strong>
                                <p class="text">bunga bangke bau bat dah pokoknya</p>
                                <label for="qty">Quantity</label>
                                <input type="number" name="qty" style="border: none; border-radius: 2px; padding: 5px; width: 80px; margin-left: 50px"> <br>
                                <input class="tombol btn btn-primary py-2 mt-2" type="submit" value="Add to Cart" style="font-size: 11px; margin-left: 115px">
                            </div>
                    </div>
    @endsection 
@endsection     


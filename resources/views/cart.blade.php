@extends('layout/header')

@section('style') 
    <style>
        body{
            background-color: #fdcfdf;
        }
        .content2{
            background-color: #ba7967;
            width: 800px;
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
        .totalprice{
            
        }

    </style>
    @section('containers')
        <div class="containers">
            <div>
                <div>
                    <div class="tulisan text-center" style="margin-top: 20px">
                        <h1>My Cart</h1>
                    </div>
                    
                    <?php
                    $totalprice = 0;
                    ?>
                        @foreach ($flowers as $flower)

                        <?php
                        $totalprice += $flower->Subtotal;
                        ?>

                        <div class="mt-5 mx-5 d-flex justify-content-center flex-colums">
                            <div class="row content2 py-2">
                                <div class="side col-2">    
                                    <img class="img" src="{{asset('asset/'.$flower->Flowers_Image ) }}" alt="{{$flower->Flowers_Image }}">
                                </div>
                                <div class="side col-2" style="margin-left: 100px">
                                    <p class="text mt-3">{{$flower->Flowers_Name}}
                                    </p>
                                </div>
                                <div class="side col-2">
                                    <p class="text mt-3" style="color: #8a610b">Rp.{{$flower->Flowers_Price}}</p>
                                </div>
                                <div class="side col-1">
                                    <label for="qty">Quantity: {{$flower->Quantity}}</label>
                                    <input type="number" name="qty" style="border: none; border-radius: 2px; padding: 5.9px; width: 80px;">
                                </div>
                                <div class="side col-1">
                                    <input class="tombol btn btn-primary py-2 mt-2" type="submit" value="Update" style="font-size: 12px; margin-left: 15px">
                                </div>
                                <div class="side col-1">
                                <div class="total-price" style="font-size: 14px; margin-left: 20px">Rp.{{$flower->Subtotal}}</div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="mt-2 mx-auto w-50">
                        <h1 class="totalprice d-flex justify-content-end">
                            Rp.{{$totalprice}}
                        </h1>
                        </div>
                        <form action="/trDetail/{{Auth::user()->id}}" method="POST">
                            @csrf
                            <div class="button mb-4">
                                <input type="submit" class="btn btn-danger" value="Checkout"> 
                            </div>
                        </form>
                </div>
            </div>
    @endsection 
@endsection     


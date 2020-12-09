@extends('layout/header')

@section('style') 
    <style>
        body{
            background-color: #fdcfdf;
        }
        .img{
            max-width: 220px;
        }
     
     table{
      background-color: #ba7967;
     }

    </style>
    @section('containers')
        <div class="containers">
            <div>
                <div>
                    <div class="tulisan text-center" style="margin-top: 20px">
                        <h1>Your Transaction History</h1>
                    </div>
                    <div class="mt-5 mx-5 d-flex justify-content-center ">
                            <div class="content2 text-center">
                                <table class="table table-bordered">
                                    <thead>
                                      <tr>
                                        <th scope="col">Flower Image</th>
                                        <th scope="col">Flower Name</th>
                                        <th scope="col">Subtotal</th>
                                        <th scope="col">Quantity</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <th scope="row">
                                          <img class="img" src="{{asset('asset/'.$flowers->Flowers_Image ) }}" alt="{{$flowers->Flowers_Image }}">
                                        </th>
                                        <td>
                                          <p class="text mt-3">{{$flowers->Flowers_Name}}</p>
                                        </td>
                                        <td><p class="text mt-n2" style="color: #f0a500">Rp.{{$flowers->Flowers_Price}}</p>
                                        </td>
                                        <td>2</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                  <p class="float-right">Total Price: Rp 400.000.000</p>
                            </div>
                    </div>
                </div>
            </div>
    @endsection 
@endsection     


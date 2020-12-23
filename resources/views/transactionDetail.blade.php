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
                    <h1>Your Transaction at {{Carbon\Carbon::now()->isoFormat('D MMMM Y')}}</h1>
                  </div>
                    <div class="mt-5 mx-5 d-flex justify-content-center">
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
                              @foreach ($transaction as $list)
                              <tbody>
                                <tr>
                                  <th scope="row">
                                    <img class="img" src="{{asset('asset/'.$list->flowers->Flowers_Image ) }}" alt="{{$list->flowers->Flowers_Image }}">
                                  </th>
                                  <td>
                                    <p class="text mt-3">{{$list->flowers->Flowers_Name}}</p>
                                  </td>
                                  <td><p class="text mt-n2" style="color: #f0a500">Rp.{{$list->flowers->Flowers_Price}}</p>
                                  </td>
                                  <td>{{$list->Quantity}}</td>
                                </tr>
                              </tbody>
                            </table>
                            @endforeach
                            <p class="float-right">Total Price: Rp.{{$list->Subtotal}}</p>
                      </div>
                  </div>
            </div>
    @endsection 
@endsection     


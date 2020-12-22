@extends('layout/header')

@section('style') 
    <style>
        body{
            background-color: #fdcfdf;
        }
        .content2{
            background-color: #ba7967;
            padding: 10px 450px;
        }
  
        a{
            color:#000000;
            text-decoration: none;
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
                                <div class="box side">
                                    <h5>
                                        <a href="/transactionDetail/{{Auth::user()->id}}">Transaction at {{Carbon\Carbon::now()->isoFormat('D MMMM Y')}}</a>
                                    </h5>
                                    
                                </div>
                            </div>
                    </div>
                </div>
            </div>
    @endsection 
@endsection     


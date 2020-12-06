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
                                <div class="side">
                                    <strong>Transaction at 2020-05-11 19:03:58</strong>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
    @endsection 
@endsection     


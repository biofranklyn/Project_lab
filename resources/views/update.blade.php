@extends('layout/header')

@section('style') 
    <style>
        body{
            background-color: #fdcfdf;
        }
        .welcome{
            font-size: 24px;
            font-style: italic;
        }
        .content2{
            margin-top: 10px;

        }
        .img{
            max-width: 220px;
        }
        a{
            color: black;
        }
        .label1{
          margin-left: 18px;
        }
        .btn{
          margin-top: 20px;
        }

    </style>
    @section('containers')
        <div class="containers">
            <div>
                <div class="row">
                    <div class="col-4 content2 text-center" >
                                <img class="img" src="{{asset('asset/'.$flowers->Flowers_Image ) }}" alt="{{$flowers->Flowers_Image }}">
                    </div>
                    <div class="col-8">
                        <form action="/update/flower" method="POST" enctype="multipart/form-data">
                          @csrf
                          @if ($errors->any())
                              <div class="row">
                                <div class="col danger text-danger">
                                  <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                  </ul>
                                </div>
                              </div>
                          @endif
                          <div class="form-group">
                          <label for="category" class="col-sm-2 col-form-label">Category</label>
                              <select name="category" id="category" style="margin-left: 15px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" required>
                              <option value="Blossom Box" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Blossom Box</option>
                              <option value="Bouquet" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Bouquet</option>
                              <option value="Fresh Flower" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Fresh Flower</option>
                              <option value="Vase" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Vase</option>
                              </select>
                          </div>
                          <div class="form-group">
                            <label for="FlowerName" class="col-sm-2 col-form-label">Flower Name</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="FlowerName" name="Flowers_Name" required value="{{$flowers->Flowers_Name}}">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="price" class="col-sm-2 col-form-label">Flower Price (Rupiah)</label>
                            <div class="col-sm-10">
                              <input type="number" class="form-control" id="price" name="flowerprice" required value="{{$flowers->Flowers_Price}}">
                            </div>
                          </div>
                            <div class="form-group">
                              <label for="inputAddress" class="col-sm-2 col-form-label">Description</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputAddress" style="height: 150%" name="description" required value="{{$flowers->description}}">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="row">
                                <div class="col-2">
                                  <div class="form-group">
                                    <label class="label1" for="img">Flower Image</label>
                                  </div>
                                </div>
                                <div class="col-6">
                                  <div class="col-sm-10">
                                    <input type="file" class="form-control-file" id="img" name="flowerimage">
                                  </div>
                                  <div class="col-sm-10">
                                    <input type="hidden" name="id" value="{{$flowers->id}}">
                                    <input type="submit" class="btn btn-primary" value="Add Flower">
                                </div>
                                </div>
                              </div>
                            </div>
                      </form>
                    </div>
                </div>
            </div>
    @endsection 
@endsection     
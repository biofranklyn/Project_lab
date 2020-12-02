@extends('layout/header')

@section('style') 
    <style>
        body{
            background-color: #fdcfdf;
        }
    </style>
    @section('containers')
        <div class="containers">
            <div style="width: 100%; height: 788px;">
                <div style="width: 60%; height: 680px; margin-left: auto; margin-right: auto">
                    <form action="/add/flower" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="container text-center pt-3">
                            <h3> Add New Flower </h3>
                        </div>
                        @if ($errors->any())
                            <div class="row">
                              <div class="col danger text-danger">
                                <ul>
                                  @foreach ($errors->all() as $erroanying)
                                      <li>{{$erroanying}}</li>
                                  @endforeach
                                </ul>
                              </div>
                            </div>
                        @endif
                        <div class="form-group row">
                        <label for="category" class="col-sm-2 col-form-label">Category</label>
                            <select name="category" id="category" style="margin-left: 15px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" required>
                            <option value="Blossom Box" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Blossom Box</option>
                            <option value="Bouquet" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Bouquet</option>
                            <option value="Fresh Flower" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Fresh Flower</option>
                            <option value="Vase" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Vase</option>
                            </select>
                        </div>
                        <div class="form-group row">
                          <label for="FlowerName" class="col-sm-2 col-form-label">Flower Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="FlowerName" name="Flowers_Name" required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="price" class="col-sm-2 col-form-label">Flower Price (Rupiah)</label>
                          <div class="col-sm-10">
                            <input type="number" class="form-control" id="price" name="flowerprice" required>
                          </div>
                        </div>
                          <div class="form-group row">
                            <label for="inputAddress" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputAddress" style="height: 150%" name="description" required>
                            </div>
                          </div>
                          <div class="form-group row"></div>
                            <div class="form-group row">
                              <label for="img">Flower Image</label>
                              <div class="col-sm-10" style="margin-left: 55px">
                                <input type="file" class="form-control-file" id="img" name="flowerimage">
                              </div>
                            </div>
                            <div class="col-sm-10" style="margin-left: 140px">
                                <input type="submit" class="btn btn-primary" value="Add Flower">
                            </div>
                            </form>
                </div>
            </div>
    @endsection 
@endsection    


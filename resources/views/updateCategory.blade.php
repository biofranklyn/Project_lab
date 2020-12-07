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
                    <div class="row mt-2 mx-auto d-flex justify-content-center mt-5">
                            <div class="col-4 py-2 px-0 text-center ">
                                        <img class="img" src="{{asset('asset/blossombox/blossom.jpg') }}" alt="blossom.jpg">
                            </div>
                            <div class="col-5">
                            <div class="form-group row">
                                <label for="CatName" class="float-left col-form-label">Category Name</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" id="CatName" name="Category Name" required value="Blossom Box">
                                </div>
                              </div>
                              <div class="form-group row">
                              <label for="img" class="float-left col-form-label">Category Image</label>
                              <div class="col-sm-10">
                                <input type="file" class="form-control-file" id="img" name="category image">
                              </div>
                            </div>
                                <input type="submit" class="btn btn-primary" style="margin-left: 16.5%" value="Update">
                            </div>
                    </div>
    @endsection 
@endsection     


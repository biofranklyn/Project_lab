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
            <form action="/updateCategory/homepage" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mt-2 mx-auto d-flex justify-content-center mt-5">
                    <div class="col-4 py-2 px-0 text-center ">
                        <img class="img" src="{{asset('asset/'.$category->CategoryImage ) }}" alt="{{$category->CategoryImage }}">
                    </div>
                    <div class="col-5">
                    <div class="form-group row">
                        <label for="CatName" class="float-left col-form-label">Category Name</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="CatName" name="CategoryName" required value="{{$category->CategoryName }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="img" class="float-left col-form-label">Category Image</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control-file" id="img" name="category_image">
                        </div>
                    </div>
                        <input type="hidden" name="id" value="{{$category->id}}">
                        <input type="submit" class="btn btn-primary" style="margin-left: 16.5%" value="Update">
                    </div>
                </div>
            </form>
    @endsection 
@endsection     


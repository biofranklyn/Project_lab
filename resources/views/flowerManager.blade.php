@extends('layout/header')

@section('style') 
    <style>
        body{
            background-color: #fdcfdf;
        }
        .content2{
            background-color: #fca3cc;
        }

    </style>
    @section('containers')
        <div class="containers">
                <div style="margin-top: 20px">
                    <h1 style="font-style: italic; text-align: center">Bouquet</h1>
                        <div style="margin-top: 20px">
                        <label for="category" class="col-sm-2 col-form-label"></label>
                            <select name="category" id="category" style="margin-left: 15px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; padding: 10px 20px; border: none; border-radius: 5px" required>
                                <option value="Blossom Box" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"> Name</option>
                                <option value="Bouquet" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Price</option>
                            </select>
                            <input type="search" placeholder="Search" style="border: none; padding: 9px 20px; border-radius: 5px">
                            <button type="submit" style="padding: 9px 13px; border: none; border-radius: 5px; background-color: #3d7ea6; color: white; margin-left: 15px">Search</button>
                        </div>
                        {{--ini gue gatau gabisa-bisa buat ngebikin fotonya jadi sejajar, pake inline-block nga bisa soalnya, ntar lo pake chunk aja di foreach--}}
                            <div class="row  mt-5 mx-5 d-flex justify-content-center" style="display: inline-block">
                                <div class="col-2 content2 py-2 px-0 mx-1 text-center ">
                                    <img src="{!! asset('asset/Bouquet/FlowerBouquet.jpg'); !!}" alt="FlowerBouquet.jpg" style="max-width: 200px;">
                                    <p>Bunga baket putih</p>
                                    <p>Rp50.000,00</p>
                                    <input class="btn btn-danger" type="submit" value="Delete Flower" style="font-size: 11px">
                                    <input class="tombol btn btn-primary" type="submit" value="Update Flower" style="font-size: 11px">
                                </div>
                            </div>
                            <div class="row  mt-5 mx-5 d-flex justify-content-center" style="display: inline-block">
                                <div class="col-2 content2 py-2 px-0 mx-1 text-center ">
                                    <img src="{!! asset('asset/Bouquet/FlowerBouquet2.jpg'); !!}" alt="FlowerBouquet2.jpg" style="max-width: 200px;">
                                    <p>Bunga baket pink</p>
                                    <p>Rp100.000,00</p>
                                    <input class="btn btn-danger" type="submit" value="Delete Flower" style="font-size: 11px">
                                    <input class="tombol btn btn-primary" type="submit" value="Update Flower" style="font-size: 11px">
                                </div>
                            </div>
                </div>
        </div>
    @endsection 
@endsection     


@extends('layout/header')

@section('style') 
    <style>
       
    </style>
    @section('containers') 
    
    <div style="background-color: #fdcfdf; width: 100%; height:788px;">
        <div style="width: 90%; height:680px; margin-left:auto; margin-right:auto;">
            <div class="container text-center pt-3">
                <h3> Login </h3>
            </div>
    
            <div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                </div>
            @endif
                <form action="/loginauth" method="GET">
                    <div class="form-group">
                      <label for="exampleInputEmail1">E-mail</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    <div class="form-group form-check">
                      <input type="checkbox" class="form-check-input" name="remember" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                    </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    <div class=" form-group form-check" style="display: inline-block;">
                        <a href=""><p>Forgot Your Password?</p></a>
                    </div>
                </form>
            </div>
    
          </div>
        </div>
    </div>
            
    @endsection 
@endsection     


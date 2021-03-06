@extends('layout/header')

@section('style') 
    
    <style>
        
             .background{
              background-color: #fdcfdf; 
              width: 100%; 
              height:788px;
             }
             .bg{
              width: 90%; 
              height:680px; 
              margin-left:auto;
              margin-right:auto;
             }
    </style>
    @section('containers') 
    
    <div class="background">
        <div class="bg">
          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                  </ul>
              </div>
          @endif

          <form action="/reg" method="POST" enctype="multipart/form-data">
              @csrf
            <div class="container text-center pt-3">
                <h3> Register </h3>
            </div>
            <div class="form-group row">
                <label for="inputUsername" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputUsername" name="username" minlength="5" required>
                </div>
              </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">E-mail Address</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" name="email" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" name="Password" minlength="8"  required>
              </div>
            </div>
            <div class="form-group row">
                <label for="inputConfirmPassword3" class="col-sm-2 col-form-label">Confirm Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="inputConfirmPassword3" name="Password_confirmation" required>
                </div>
              </div>

            <fieldset class="form-group">
              <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                <div class="col-sm-10">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Gender" id="gridRadios1" value="Male" checked>
                    <label class="form-check-label" for="Male">
                      Male
                    </label>
                  </div>

                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Gender" id="gridRadios2" value="Female">
                    <label class="form-check-label" for="Female">
                      Female
                    </label>
                  </div>
                </div>
              </div>
            </fieldset>

            <div class="form-group row">
                <label for="inputDOB" class="col-sm-2 col-form-label">Date of Birth</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" id="inputDOB" name="DOB" required>
                </div>
              </div>

              <div class="form-group row">
                <label for="inputAddress" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputAddress" minlength="10" name="Address" required>
                </div>
              </div>
              
                <div style="margin-left:247px;">
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    var password = document.getElementById("inputPassword3")
  , confirm_password = document.getElementById("inputConfirmPassword3");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>

    @endsection 
@endsection     


@extends('layout/header')

@section('style') 
    
    <style>
            body{
                background-color: #fdcfdf; 
            }
             .background{
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
        <form>
            <div class="container text-center pt-3 mt-2">
                <h3> Change Password </h3>
            </div>
            <div class="mt-3">
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Your Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="inputPassword3" minlength="8"  required>
                </div>
              </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">New Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" minlength="8"  required>
              </div>
            </div>
            <div class="form-group row">
                <label for="inputConfirmPassword3" class="col-sm-2 col-form-label">Confirm Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="inputConfirmPassword3" required>
                </div>
              </div>
                <div style="margin-left:247px;">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Change Password</button>
                    </div>
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


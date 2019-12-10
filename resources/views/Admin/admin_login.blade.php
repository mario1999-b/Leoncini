<!DOCTYPE html>
<html lang="en">

<body>

<link rel="stylesheet" href="{{asset ('css/backend_css/matrix-login.css') }}" />
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="sidenav">
    <br>
    <br>
<img src="{{asset ('images/backend_images/text.png') }}" alt="First slide">
         <div class="login-main-text">
            <p>Fai il login o registrati per accedere.</p>
        </div>
        <img src="{{asset ('images/backend_images/banda.jpg') }}" alt="First slide">
      </div>
      <div class="main">
         <div class="col-md-5 col-sm-12">
         
         @if(Session::has('flash_message_error'))           
            <div class="alert alert-success alert-block">
	         <button type="button" class="close" data-dismiss="alert">×</button>	
            <strong>{!! session('flash_message_error') !!}</strong>
            </div>
         @endif  

         @if(Session::has('flash_message_success'))
            <div class="alert alert-success alert-block">
    	      <button type="button" class="close" data-dismiss="alert">×</button>
            <strong> {!! session ('flash_message_success') !!}</strong>
            </div>
         @endif 
            <form id="loginform" class="login-form" method="post" action="{{ url('admin') }}">{{ csrf_field() }}
                  <div class="form-group">
                     <b>User Name</b>
                     <input type="email" name="email" class="form-control" placeholder="User Name">
                  </div>
                  <div class="form-group">
                     <b>Password</b>
                     <input type="password" name="password" class="form-control" placeholder="Password">
                  </div>
                  
                  <span class="pull-right"><input type="submit" value="Login" class="btn btn-black"></span>
                  <button type="submit" class="btn btn-secondary">Registrati</button>
                  
               </form>
            </div>
         </div>
      </div>
</body>
</html>

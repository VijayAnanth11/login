<html>
<div class="container">
<div class="card">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('main.css')}}">

        <body>
        <div class="initial">
        <h1>Create an account</h1>     
<form method ="POST" action="/store">
<label for="">Full Name<input type ="text" name="name" class="form-control form-control-lg"></label><br>

<label for=""> NIC Number<input type ="text" name="lastname" class="form-control form-control-lg"></label><br>
<label for="">Email Address<input type ="text" name="date" class="form-control form-control-lg"></label><br>

<label for="">User Name<input type ="text" name="email" class="form-control form-control-lg"></label><br>

<label for="">Contact number<input type ="number" name="number" class="form-control form-control-lg"></label><br>

<h4>Password</h4>

<label for="">Create Password<input type ="password" name="password" class="form-control form-control-lg"></label><br>
<label for="">Re-Type Password<input type ="password" name="password_confirmation" class="form-control form-control-lg"></label><br>
<input type="submit" class="btn btn-info btn-lg btn-success" value="Register">
 @csrf
 
</form>
</div>
</body>
</div>
</div>
</html>

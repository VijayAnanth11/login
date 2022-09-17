<html>
<div class="container">
<div class="card">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('style.css')}}">

        <body>
          <div class="initial">
          <h1>Please Sign in</h1>
        
          <form style="width: 23rem;" method ="POST" action="/authenticate">
          
            <label class="form-label" for="">User Name</label>
            <input type="text" name="email" class="form-control form-control-lg" />
            
            <label class="form-label" for="">Password</label>
            <input type="password" name="password" class="form-control form-control-lg" />
          
           <input class="btn btn-info btn-lg btn-block"  type="submit" value="login"></button></br>
           <a> Don't have an account?</a>
           <a href="reg"> Sign up</a>
             @csrf
            </form>
            <div class="alert alert-danger alert-dismissible show" role="alert">Incoreect</div>
</diV>
</body>
</div>
</div>
</html>
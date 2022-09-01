
<html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('sub.css')}}">

<body>
          
<div class="initial">
<h1>Hello {{auth()->user()->name}} !!!</h1>

<a href = "logout" class="btn btn-info btn-lg btn-block">Logout</a>

</div>
</body>
</html>

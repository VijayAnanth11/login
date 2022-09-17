<html>
<div class="container">
<div class="card">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('sub.css')}}">

<body>
<div class="initial">
<h1>Hello {{auth()->user()->name}} !!!</h1>
<label> Welcome to Our APP</label>
<h4> Your Details</h3>
<h3>Your Full Name -  {{auth()->user()->name}} </h1>
<h3>NIC Number -  {{auth()->user()->lastname}} </h1>
<h3>Email Address - {{auth()->user()->date}} </h1>
<h3> User Name - {{auth()->user()->email}} </h1>
<h3>Contact number - {{auth()->user()->number}} </h1>

<a href = "logout" class="btn btn-info btn-lg btn-block">Logout</a>

</div>
</body>
</div>
</div>
</html>

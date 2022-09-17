<html>
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('sub.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css" integrity="sha384-X8QTME3FCg1DLb58++lPvsjbQoCT9bp3MsUU3grbIny/3ZwUJkRNO8NPW6zqzuW9" crossorigin="anonymous">

        <body>
          
        <div class="initial">
          <h1>Example APP</h1>
          
          <form>
           <div class="pt-1 mb-4">
              <a href = "reg" class="btn btn-info btn-lg btn-block" >Register</a>
            </div>
            <div class="pt-1 mb-4">
              <a href = "log"  class="btn btn-info btn-lg btn-block" >Login</a>
            </div>
            @csrf
          </form>
          <div>
</body>
</html>
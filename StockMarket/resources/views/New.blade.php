<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/bootstrap.min.css') }}" />
    <title>Edit</title>
</head>
<body>
  <div class="container">
    <form method="POST" action="{{url('store')}}">
      @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Date</label>
    <input type="date" class="form-control" id="exampleFormControlInput1" name="date" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">trade_code</label>
    <input type="text" class="form-control" id="exampleFormControlInput1"   name="trade_code"  >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">high</label>
    <input type="text" class="form-control" id="exampleFormControlInput1"   name="high" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">open</label>
    <input type="text" class="form-control" id="exampleFormControlInput1"   name="open"  >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">low</label>
    <input type="text" class="form-control" id="exampleFormControlInput1"  name="low"  
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">close</label>
    <input type="text" class="form-control" id="exampleFormControlInput1"  name="close"  >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">volume</label>
    <input type="text" class="form-control" id="exampleFormControlInput1"  name="volume" >
  </div>
  <button type="submit" class="btn btn-primary">Edit</button>
</form>
</div>
</body>
</html>
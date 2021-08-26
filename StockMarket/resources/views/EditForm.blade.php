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
    <form method="POST" action="{{url('edit',$stock->id)}}">
      @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Date</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="date" value="{{$stock->date}}">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">trade_code</label>
    <input type="text" class="form-control" id="exampleFormControlInput1"   name="trade_code"  value="{{$stock->trade_code}}">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">high</label>
    <input type="text" class="form-control" id="exampleFormControlInput1"   name="high" value="{{$stock->high}}">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">open</label>
    <input type="text" class="form-control" id="exampleFormControlInput1"   name="open"  value="{{$stock->open}}">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">low</label>
    <input type="text" class="form-control" id="exampleFormControlInput1"  name="low"  value="{{$stock->low}}">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">close</label>
    <input type="text" class="form-control" id="exampleFormControlInput1"  name="close"  value="{{$stock->close}}">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">volume</label>
    <input type="text" class="form-control" id="exampleFormControlInput1"  name="volume" value="{{$stock->volume}}">
  </div>
  <button type="submit" class="btn btn-primary">Edit</button>
</form>
</div>
</body>
</html>
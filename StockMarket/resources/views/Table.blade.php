<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="{{ url('/css/bootstrap.min.css') }}" />
    <title>Document</title>
</head>
<body>
   <table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">date</th>
      <th scope="col">trade_code</th>
      <th scope="col">high</th>
      <th scope="col">open</th>
      <th scope="col">low</th>
      <th scope="col">close</th> 
      <th scope="col">volume </th>
      <th scope="col">Action </th>
       
    </tr>
  </thead>
  <tbody>
      
    @foreach ($stocks as $key => $stock)
    <tr>
        
     <td>{{ $stock->id }}</td>
     <td>{{ $stock->date }}</td>
     <td>{{ $stock->trade_code }}</td>
     <td>{{ $stock->high}}</td>
     <td>{{ $stock->open }}</td>
     <td>{{ $stock->low }}</td>
     <td>{{ $stock->close }}</td>
     <td>{{ $stock->volume}}</td>
     <td><a href="{{url('editItem',$stock->id)}}"class="btn btn-primary"> Edit</a></td>
     <td><a href="{{url('delete',$stock->id)}}"class="btn btn-danger"> Delete</a></td>    
    </tr>
    @endforeach
  </tbody>
</table>
</body>
</html>
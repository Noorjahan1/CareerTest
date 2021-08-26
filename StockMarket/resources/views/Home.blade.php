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
  <a href="{{url('fromSqlServer')}}" class="btn btn-warning">Edit</a>
   <table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">date</th>
      <th scope="col">trade_code</th>
      <th scope="col">high</th>
      <th scope="col">open</th>
      <th scope="col">low</th>
      <th scope="col">close</th> 
      <th scope="col">volume </th>
       
    </tr>
  </thead>
  <tbody>
    @foreach ($stocks as $stock)
    <tr>
      
     <td>{{ $stock["date"] }}</td>
     <td>{{ $stock["trade_code"] }}</td>
     <td>{{ $stock["high"] }}</td>
     <td>{{ $stock["open"] }}</td>
     <td>{{ $stock["low"] }}</td>
     <td>{{ $stock["close"] }}</td>
     <td>{{ $stock["volume"] }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</body>
</html>
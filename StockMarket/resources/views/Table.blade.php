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
  <div class="container p-5">
        <h5> Line Chart </h5>
 
        <div id="google-line-chart" style="width: 900px; height: 500px"></div>
 
    </div>
  <a href="{{url('new')}}" class="btn btn-warning">New</a>
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
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
 
        function drawChart() {
 
        var data = google.visualization.arrayToDataTable([
            ['high', 'low'],
 
                @php
                foreach($lineChart as $d) {
                    echo "['".$d->high."', ".$d->low."],";
                }
                @endphp
        ]);
 
        var options = {
          title: 'Stock Market',
          curveType: 'function',
          legend: { position: 'bottom' }
        };
 
          var chart = new google.visualization.LineChart(document.getElementById('google-line-chart'));
 
          chart.draw(data, options);
        }
    </script>
</body>
</html>
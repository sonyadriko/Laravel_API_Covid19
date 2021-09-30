<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Data Global</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

	<div class="container">
		<table class="table">
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Provinsi</th>
		      <th scope="col">Jumlah Kasus</th>
		      <th scope="col">Jumlah Meninggal</th><!-- 
		      <th scope="col">Jumlah Sembuh</th>
		      <th scope="col">Kasus Aktif</th> -->
		    </tr>
		  </thead>
		  <tbody>
		  	@php $no = 1 @endphp
		   	@foreach ($data2 as $data)
		   		<tr>
			      	<th scope="row">{{$no++}}</th>
			      	<td>{{ $data['attributes']['Country_Region']}}</td>
			      	<td>{{ $data['attributes']['Confirmed']}}</td>
			      	<td>{{ $data['attributes']['Deaths']}}</td><!-- 
			      	<td>{{ $data['attributes']['Recovered']}}</td>
			      	<td>{{ $data['attributes']['Active']}}</td> -->
			    </tr>
		   	@endforeach
		  </tbody>
		</table>
	</div>

</body>
</html>
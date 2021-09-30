<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

	<div class="container">
		<div class="card" style="width: 18rem;">
	  		<div class="card-body">
		    	<h5 class="card-title">Data Global</h5>
		    	<h6 class="card-subtitle mb-2 text-muted">Corona seluruh dunia</h6>
		    	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    	<a href="{{url('/data_global')}}" class="card-link">Page Global</a>
		    	<a href="#" class="card-link">Another link</a>
			</div>
			<div class="card-body">
		    	<h5 class="card-title">Data Indonesia</h5>
		    	<h6 class="card-subtitle mb-2 text-muted">Corona seluruh Indonesia</h6>
		    	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

		    	<p>Positif : {{ $data3['positif'] }}</p>
		    	<p>Dirawat : {{ $data3['dirawat'] }}</p>
		    	<p>Sembuh : {{ $data3['sembuh'] }}</p>
		    	<p>Meninggal : {{ $data3['meninggal'] }}</p>
		 
		    	<a href="{{url('/data_ina')}}" class="card-link">Page Indonesia</a>
		    	<a href="#" class="card-link">Another link</a>	

			</div>
			<div class="card-body">
		    	<h5 class="card-title">Data Vaksin Indonesia</h5>
		    	<h6 class="card-subtitle mb-2 text-muted">Vaksinasi</h6>
		    	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

				<p>totalsasaran : {{ $data4['totalsasaran'] }}</p>
		    	<p>sasaranvaksinsdmk : {{ $data4['sasaranvaksinsdmk'] }}</p>
		    	<p>sasaranvaksinlansia : {{ $data4['sasaranvaksinlansia'] }}</p>
		    	<p>sasaranvaksinpetugaspublik : {{ $data4['sasaranvaksinpetugaspublik'] }}</p>
		    	<p>vaksinasi1 : {{ $data4['vaksinasi1'] }}</p>
		    	<p>vaksinasi2 : {{ $data4['vaksinasi2'] }}</p>


		    	<a href="{{url('/data_global')}}" class="card-link">Page Global</a>
		    	<a href="#" class="card-link">Another link</a>
			</div>
		</div>
	</div>

</body>
</html>
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
		    	<a href="{{url('/data_ina')}}" class="card-link">Page Indonesia</a>
		    	<a href="#" class="card-link">Another link</a>
			</div>
		</div>
	</div>

</body>
</html>
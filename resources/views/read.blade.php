@include('inc.header')
<!DOCTYPE html>
	<html>
	<body>
	   <div class="container">
	   	 <div class="row">
	   	 	<legend>Read Artical</legend>
	        <p class="lead">{{ $articales->title }}</p>
	        <p>{{ $articales->description }}</p>
	   	 </div>
	   </div>
	</body>
	</html>


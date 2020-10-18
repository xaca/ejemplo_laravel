<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/main.css">
	<title></title>
	<style>
		body{
			background: grey;
		}
	</style>
</head>
<body>
	<h1>{{$id_producto??''}}</h1>
	<ul>
	@foreach ($noticias as $noticia)
    	<li><img src='{{$noticia->imagen}}' /></li>
	@endforeach
	</ul>
</body>
</html>
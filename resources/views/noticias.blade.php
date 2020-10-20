<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="css/main.css">
	<title></title>
</head>
<body>
	
	@foreach ($noticias as $noticia)
	<section class="wthree-row py-5 about-main" id="">
	    <div class="container py-lg-5 py-md-4 py-2">
	        <div class="row">
	            <div class="col-lg-6 mb-lg-0 mb-sm-5 mb-4">
	                <h3 class="title-small mb-2">{{$noticia->titulo}}</h3>
	                <h3 class="title-big">{{$noticia->autor}}</h3>
	                <p class="pt-4">{{$noticia->contenido}}</p>
	                <a href="/ejemplo/{{$noticia->id}}" class="btn btn-style btn-primary mt-lg-5 mt-4">Más...</a>
	            </div>
	            <div class="col-lg-6 text-center">
	                <div class="agileits-banner-info4">
	                    <img src="{{$noticia->imagen}}" alt="image" class="img-fluid radius-image" />
	                </div>
	            </div>
	        </div>
	    </div>
	</section>
	@endforeach

</body>
</html>
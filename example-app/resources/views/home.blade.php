<!DOCTYPE html>
<html lang="en">
<head>
	<link href="{{ asset('css/app.css')}}" rel="stylesheet">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Da</title>

</head>
<body>
	<div class="container">
		<div class="logo">
			<img class="images" src="{{$img_logo}}">
			<h2>{{$privet}}</h2>
		</div>
		<div class="row">
			<div class="service">
				<div class="ser-text">
					<img class="img-ser" src="{{$img_1}}">
					<div class="">
						<h1>{{$name}}</h1>
						<p>{{$opisanie}}</p>
					</div>
				</div>
			</div>
			<div class="service">
				<div class="ser-text">
					<img class="img-ser" src="{{$img_2}}">
						<h1>{{$name_1}}</h1>
						<p>{{$opisanie_2}}</p>

				</div>
			</div>
			<div class="service">
				<div class="ser-text">
					<img class="img-ser" src="{{$img_3}}">
					<div class="">
						<h1>{{$name_3}}</h1>
						<p>{{$opisanie_3}}</p>
					</div>
				</div>
			</div>

		</div>
	</div>
</body>
</html>

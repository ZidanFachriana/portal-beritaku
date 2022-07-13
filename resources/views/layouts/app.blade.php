<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="keywords" content="">

	<title>{{ $title }}</title>

	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	
</head>

<body>
	<div class="wrapper">
	@include('layouts.sidebar')
		<div class="main">
		@include('layouts.navigation')

			<main class="content">
				{{ $slot }}
			</main>

			@include('layouts.footer')
		</div>
	</div>

	<script src="{{ asset('js/app.js') }}"></script>
	<script src="{{ asset('js/ckeditor.js') }}"></script>

	


</body>
<script>
	ClassicEditor
		.create( document.querySelector( '#paw' ) )
		.catch( error => {
			console.error( error );
		} );
</script>
</html>
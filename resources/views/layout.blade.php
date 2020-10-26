<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('titulo-pagina')</title>
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
<!-- <h1>A minha web App em Laravel</h1> -->
<h2>@yield('header')</h2>
@yield('conteudo')

	<script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>


</body>
</html>
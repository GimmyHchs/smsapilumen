<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SMS API Lumen</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Lato:700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Asap:400italic' rel='stylesheet' type='text/css'>
	<link href="{{ url('/css/home.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
		<ul class="list-inline" id="appbar" >
			<li><a href="{{url('/home') }}" id="appitem">Home</a></li>
			<li><a href="{{url('/document')}}" id="appitem">Document</a></li>
			<li><a href="{{url('/account')}}" id="appitem">ManageAccount</a></li>
		</ul>
	    <div id="div_bitbucket" align="right"><a href="https://bitbucket.org/Genki-Taiwan/smsapilumen"><img src="{{url('/img/icon-bitbucket-small.png')}}" alt=""></img></a></div>

	@yield('content')
	@yield('content2')

</body>
<footer>
			<h3 id="font_lato" class="footerfont">Footer</h3>
			<h4 id="font_lato" class="footerfont">SMS API Service Copyright © Mynet</h4>
			<h4 id="font_lato" style="color:gray"><a class="hchsfooter" href="http://www.mynet.com.tw">Design by Hchs</a></h4>
</footer>
</html>
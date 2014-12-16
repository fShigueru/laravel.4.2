<!DOCTYPE html>
<html lang="en" ng-app="myApp">
<head>
	<meta charset="UTF-8">
	<title>Base 1</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
	</style>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.3/angular.min.js"></script>
</head>
<body>
	<div>
		<div class="container">
			@section('sidebar')
				Gerenciar site
				<ul>
					<li>
						<% HTML::link('admin/login/logout', 'Sair') %>
						<% HTML::link('admin/configuration', 'Configurações') %>
					</li>
				</ul>
			@show
			@yield('content')
		</div>
	</div>
</body>
</html>
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Passport Components</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- resources-->
        <link href="/css/app.css" rel="stylesheet" type="text/css">

    </head>
    <body>
    	<div class="container">
    		<div class="row">
    			<div class="col-xs-12">
			    	<div id="app">

				    	<!-- passport vue components -->
				    	<passport-clients></passport-clients>
						<passport-authorized-clients></passport-authorized-clients>
						<passport-personal-access-tokens></passport-personal-access-tokens>

					</div><!--#app-->
				</div>
			</div><!--row-->
		</div><!--container-->
    </body>
    
    <!-- javascript -->
    <script src="/js/app.js" type="text/javascript"></script>
</html>
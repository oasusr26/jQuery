<!doctype html>			
<html lang="ja">			
	<head>			
  	<meta charset="utf-8">		
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">	
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<title>jQuery</title>			
  	<link rel="stylesheet" href="../css/style.css">	
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">	
  	<!--[if	lt IE 9]>
  	<script	src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>		
  	<script	src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>		
  	<![endif]-->			
	</head>			
	<body>			
      @include('commons.navbar')
      
      <div class="container">
          @include('commons.error_messages')
          
          @yield('content')
      </div>
	<script	type="text/javascript" src="../js/javascript.js"></script>	
	<script	type="text/javascript" src="../js/main.js"></script>	
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script	src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	</body>			
</html>				

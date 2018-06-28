<html>
<head>
	<link rel="shortcut icon" href="{{ url('images/NVBSP_LOGO.png') }}" />
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Blood Safety Indicator - Official Site</title>

    <!-- Bootstrap -->
    <link href="{{ url('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('vendor/datatable/datatables.min.css') }}" rel="stylesheet">
    <link href="{{ url('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('css/custom.css')  }}">
</head>
<body>

	

	<nav class="navbar navbar-default">
		<!-- NVBSP - BSI logo with background color -->
		<div id='header_wrap'></div>
		<!-- NVBSP - BSI logo with background color -->

	  <div class="container-fluid">
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li><a href="http://home.nbbnets.net" target='_blank' title='Visit NVBSP'>
	        	<span class='glyphicon glyphicon-chevron-right text-danger'></span> NVBSP</a></li>
	        <li><a href="http://www.nbbnets.net" target='_blank' title='Visit NBBNETS'>
	        	<span class='glyphicon glyphicon-chevron-right text-danger'></span> NBBNETS</a></li>
	        <li><a href="http://home.nbbnets.net/sandugo" target='_blank' title='Visit National Sandugo'>
	        	<span class='glyphicon glyphicon-chevron-right text-danger'></span> SANDUGO</a></li>
	        <li><a href="http://wbdd2015palawan.com" target='_blank' title='Visit World Blood Donor Day'>
	        	<span class='glyphicon glyphicon-chevron-right text-danger'></span> WBDD</a></li>
	        <li><a href="http://www.doh.gov.ph" target='_blank' title='Visit DOH'>
	        	<span class='glyphicon glyphicon-chevron-right text-danger'></span> DOH</a></li>
	        
	      </ul>
	      
	      <ul class="nav navbar-nav navbar-right">
	        <!-- <li><a href="{{ URL::to('login') }}"><span class='glyphicon glyphicon-lock'></span> Login</a></li> -->
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

	

	<div class="row">
		<div class="content">
			<div class='spacer'></div>

			<div class='col-md-12 col-sm-12'>
				@yield('content')
			</div>
		</div>
	</div>


	 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ url('vendor/jquery/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ url('vendor/datatable/datatables.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ url('vendor/bootstrap/js/bootstrap.min.js') }}"></script>

</body>
</html>
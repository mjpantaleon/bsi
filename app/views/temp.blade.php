<html>
<head>
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

	<!-- NVBSP - BSI logo with background color -->
	<div id='header_wrap'></div>
	<!-- NVBSP - BSI logo with background color -->

	<nav class="navbar navbar-default">
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

	

	<div class="container">
		<div class="content">
			<div class='spacer'></div>

			<div class='col-md-9 col-sm-9'>
				@yield('content')
			</div>

			<div class='col-md-3 col-sm-3'>
				<div class="panel panel-danger">
				  <div class="panel-heading"><p>What do you want to do?</p></div>
				  <ul class="list-group">
					    <li class="list-group-item"><a href="{{ URL::to('bsflist/add') }}"><span class='glyphicon glyphicon-home text-info' ></span> 
					    	Add New BSF</a></li>
					    <li class="list-group-item"><a href=""><span class='glyphicon glyphicon-tags text-info' ></span> 
					    	Top Ten Donation</a></li>
					    <li class="list-group-item"><a href=""><span class='glyphicon glyphicon-pushpin text-info' ></span> 
					    	BSF Checklist</a></li>
					    <li class="list-group-item"><a href=""><span class='glyphicon glyphicon-star-empty text-info' ></span> 
					    	Lead BSF</a></li>
					    <li class="list-group-item"><a href=""><span class='glyphicon glyphicon-user text-info' ></span> 
					    	User Maintenance</a></li>
				  </ul>
				</div>


				<div class="panel panel-danger">
				  <div class="panel-heading"><p>CONTACT US</p></div>
				    <ul class="list-group">
					    <li class="list-group-item">pbcbsi@yahoo.com </li>
					    <li class="list-group-item">doh.nbbnets@gmail.com</li>
					    <li class="list-group-item">(02) 995 - 3846 loc. 3312 / 3313</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div id='footer_wrap' class="footer">
		    National Voluntary Blood Services Program - Information Management Unit<br>
		    Bld. 2, 3rd flr., Info. Management Unit - Philippine Blood Disease and Transfusion Center, <br>
		    Lung Center Comp., Quezon Ave., Quezon City<br>
		    All rights reserved 2015 ©<br>
		    (02) 995 - 3846 loc. 300
	</div>


	 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ url('vendor/jquery/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ url('vendor/datatable/datatables.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ url('vendor/bootstrap/js/bootstrap.min.js') }}"></script>

</body>
</html>
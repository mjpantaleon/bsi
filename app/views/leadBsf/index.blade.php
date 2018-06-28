@section('content')

 	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li><a href="{{ URL::to('/') }}"><span class='glyphicon glyphicon-home'></span> Home<span class="sr-only">(current)</span></a></li>
	        <li><a href="{{ URL::to('bsi') }}"><span class='glyphicon glyphicon-file'></span> Blood Safety Indicator</a></li>
	        <li><a href="{{ URL::to('topten') }}"><span class='glyphicon glyphicon-tags' ></span> Top 10 Blood Donation</a></li>
	        <li><a href="{{ URL::to('checklist') }}"><span class='glyphicon glyphicon-pushpin'></span> BSF Checklist</a></li>
	        <li class="active"><a href="{{ URL::to('leadbsf') }}">
	        	<span class='glyphicon glyphicon-star-empty text-info'></span> Lead BSF</a></li>
	        
	      </ul>
	      
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="{{ URL::to('login') }}"></a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>


	<div class="row">

	  	<div class='col-md-6 col-sm-6'>
			<div class="panel panel-default">
			  <div class="panel-heading"><span class='lavander'>Region I (Ilocos Region)</span></div>
			   <ul class="list-group">
			   		@foreach($region1 as $facility1)
				    <li class="list-group-item"><span class='glyphicon glyphicon-play'></span> {{ $facility1->BSF }}</li>
				    @endforeach
				</ul>
			</div>
		</div>
		<!-- end region I -->

		<div class='col-md-6 col-sm-6'>
			<div class="panel panel-default">
			  <div class="panel-heading"><span class='lavander'>Region II (Cagayan Valley)</span></div>
			   <ul class="list-group">
			   		@foreach($region2 as $facility2)
				    <li class="list-group-item"><span class='glyphicon glyphicon-play'></span> {{ $facility2->BSF }}</li>
				    @endforeach
				</ul>
			</div>
		</div>

	</div>
	<!-- end region II -->

	<div class="row">
		<div class='col-md-6 col-sm-6'>
			<div class="panel panel-default">
			  <div class="panel-heading"><span class='lavander'>Region III (Central Luzon)</span></div>
			   <ul class="list-group">
			   		@foreach($region3 as $facility3)
				    <li class="list-group-item"><span class='glyphicon glyphicon-play'></span> {{ $facility3->BSF }}</li>
				    @endforeach
				</ul>
			</div>
		</div>
		<!-- end region III -->

		<div class='col-md-6 col-sm-6'>
			<div class="panel panel-default">
			  <div class="panel-heading"><span class='lavander'>Region IV-A (CALABARZON)</span></div>
			   <ul class="list-group">
			   		@foreach($region4a as $facility4a)
				    <li class="list-group-item"><span class='glyphicon glyphicon-play'></span> {{ $facility4a->BSF }}</li>
				    @endforeach
				</ul>
			</div>
		</div>
	</div>
	<!-- end of region 4A -->


	<div class="row">
		<div class='col-md-6 col-sm-6'>
			<div class="panel panel-default">
			  <div class="panel-heading"><span class='lavander'>Region IV-B (MIMAROPA)</span></div>
			   <ul class="list-group">
			   		@foreach($region4b as $facility4b)
				    <li class="list-group-item"><span class='glyphicon glyphicon-play'></span> {{ $facility4b->BSF }}</li>
				    @endforeach
				</ul>
			</div>
		</div>
		<!-- end of region 4B -->

		<div class='col-md-6 col-sm-6'>
			<div class="panel panel-default">
			  <div class="panel-heading"><span class='lavander'>Region V (Bicol Region)</span></div>
			   <ul class="list-group">
			   		@foreach($region5 as $facility5)
				    <li class="list-group-item"><span class='glyphicon glyphicon-play'></span> {{ $facility5->BSF }}</li>
				    @endforeach
				</ul>
			</div>
		</div>
	</div>	
	<!-- end of region  V-->	
	
	<div class="row">
		<div class='col-md-6 col-sm-6'>
			<div class="panel panel-default">
			  <div class="panel-heading"><span class='lavander'>Region VI (Western Visayas)</span></div>
			   <ul class="list-group">
			   		@foreach($region6 as $facility6)
				    <li class="list-group-item"><span class='glyphicon glyphicon-play'></span> {{ $facility6->BSF }}</li>
				    @endforeach
				</ul>
			</div>
		</div>
		
		<!-- end of region  VI-->	
		
		<div class='col-md-6 col-sm-6'>
			<div class="panel panel-default">
			  <div class="panel-heading"><span class='lavander'>Region VII (Central Visayas)</span></div>
			   <ul class="list-group">
			   		@foreach($region7 as $facility7)
				    <li class="list-group-item"><span class='glyphicon glyphicon-play'></span> {{ $facility7->BSF }}</li>
				    @endforeach
				</ul>
			</div>
		</div>
	</div>
	<!-- end of region  VII-->	


	<div class="row">
		<div class='col-md-6 col-sm-6'>
			<div class="panel panel-default">
			  <div class="panel-heading"><span class='lavander'>Region VIII (Eastern Visayas)</span></div>
			   <ul class="list-group">
			   		@foreach($region8 as $facility8)
				    <li class="list-group-item"><span class='glyphicon glyphicon-play'></span> {{ $facility8->BSF }}</li>
				    @endforeach
				</ul>
			</div>
		</div>
		<!-- end of region  VIII-->	
		
		<div class='col-md-6 col-sm-6'>
			<div class="panel panel-default">
			  <div class="panel-heading"><span class='lavander'>Region IX (Zamboanga Peninsula)</span></div>
			   <ul class="list-group">
			   		@foreach($region9 as $facility9)
				    <li class="list-group-item"><span class='glyphicon glyphicon-play'></span> {{ $facility9->BSF }}</li>
				    @endforeach
				</ul>
			</div>
		</div>
	</div>
	<!-- end of region  IX-->	

	<div class="row">
		<div class='col-md-6 col-sm-6'>
			<div class="panel panel-default">
			  <div class="panel-heading"><span class='lavander'>Region X (Northern Mindanao)</span></div>
			   <ul class="list-group">
			   		@foreach($region10 as $facility10)
				    <li class="list-group-item"><span class='glyphicon glyphicon-play'></span> {{ $facility10->BSF }}</li>
				    @endforeach
				</ul>
			</div>
		</div>
		<!-- end of region  X-->	

		<div class='col-md-6 col-sm-6'>
			<div class="panel panel-default">
			  <div class="panel-heading"><span class='lavander'>Region XI (Davao Region)</span></div>
			   <ul class="list-group">
			   		@foreach($region11 as $facility11)
				    <li class="list-group-item"><span class='glyphicon glyphicon-play'></span> {{ $facility11->BSF }}</li>
				    @endforeach
				</ul>
			</div>
		</div>
	</div>
	<!-- end of region  XI-->

	<div class="row">
		<div class='col-md-6 col-sm-6'>
			<div class="panel panel-default">
			  <div class="panel-heading"><span class='lavander'>Region XII (SOCCSKSARGEN)</span></div>
			   <ul class="list-group">
			   		@foreach($region12 as $facility12)
				    <li class="list-group-item"><span class='glyphicon glyphicon-play'></span> {{ $facility12->BSF }}</li>
				    @endforeach
				</ul>
			</div>
		</div>
		<!-- end of region  XII-->	

		<div class='col-md-6 col-sm-6'>
			<div class="panel panel-default">
			  <div class="panel-heading"><span class='lavander'>Region XIII (CARAGA)</span></div>
			   <ul class="list-group">
			   		@foreach($caraga as $caraga)
				    <li class="list-group-item"><span class='glyphicon glyphicon-play'></span> {{ $caraga->BSF }}</li>
				    @endforeach
				</ul>
			</div>
		</div>
	</div>
	<!-- end of region  XIII-->

	<div class="row">
		<div class='col-md-6 col-sm-6'>
			<div class="panel panel-default">
			  <div class="panel-heading"><span class='lavander'>NCR (National Capital Region)</span></div>
			   <ul class="list-group">
			   		@foreach($ncr as $ncr)
				    <li class="list-group-item"><span class='glyphicon glyphicon-play'></span> {{ $ncr->BSF }}</li>
				    @endforeach
				</ul>
			</div>
		</div>
		<!-- end of region  NCR-->	


		<div class='col-md-6 col-sm-6'>
			<div class="panel panel-default">
			  <div class="panel-heading"><span class='lavander'>CAR (Cordillera Administrative Region)</span></div>
			   <ul class="list-group">
			   		@foreach($car as $car)
				    <li class="list-group-item"><span class='glyphicon glyphicon-play'></span> {{ $car->BSF }}</li>
				    @endforeach
				</ul>
			</div>
		</div>
	</div>
	<!-- end of region  CAR-->	
	
		
	
	

@stop
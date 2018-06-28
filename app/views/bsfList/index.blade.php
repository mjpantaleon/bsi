@section('content')
	


	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="{{ URL::to('bsflist') }}">
	        	<span class='glyphicon glyphicon-home text-info'></span> Blood Service Facility
	        	<span class="sr-only">(current)</span></a></li>
	        <li><a href=""><span class='glyphicon glyphicon-tags' ></span> Top 10 Blood Donation</a></li>
	        <li><a href=""><span class='glyphicon glyphicon-pushpin'></span> BSF Checklist</a></li> 
	        <li><a href=""><span class='glyphicon glyphicon-star-empty'></span> Lead BSF</a></li>
	      </ul>
	      
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="{{ URL::to('login') }}"></a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

	<!-- bread crumb section -->
	<ol class="breadcrumb">
	  <li class="active">List of Regions</li>
	</ol>
	<!-- bread crumb section -->


	@if(Session::get('message'))
	<div class="alert alert-success">
		{{ Session::get('message') }}
	</div>
	@endif

	<div class="panel panel-default">
	  <div class="panel-heading"><p class='lavander'>PLEASE SELECT FIRST THE REGION</p></div>
	  <ul class="list-group">
	  	@foreach($regions as $region)
	  	<li class="list-group-item">
	  		<a class='bsi_link' href="{{ URL::to('bsflist/list/'.$region->region_id) }}">{{ $region->region }}</a>
	  	</li>
	  	@endforeach
	  </ul>
	   <div class="panel-footer"></div>
	</div>




@stop
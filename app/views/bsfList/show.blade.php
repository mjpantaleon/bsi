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
	  <li><a href="{{ URL::to('bsflist') }}">List of Regions</a></li>
	  <li class="active">Blood Service Facility</li>
	</ol>
	<!-- bread crumb section -->

	@if(Session::get('message'))
	<div class="alert alert-success">
		{{ Session::get('message') }}
	</div>
	@endif

	<div class="panel panel-default">
	  <div class="panel-heading">
	  	<h5 class='lavander'>{{ $region->region }}</h5>
	  </div>
	  	<table class="table table-bordered make-dataTable">
	  		<thead>
	  			<tr></tr>
	  			<tr>
	  				<th>Blood Service Facility</th>
	  				<th></th>
	  				<th></th>
	  				<th></th>
	  			</tr>
	  		</thead>

	  		<tbody>
	  			@foreach($list as $row)
	  			<tr></tr>
	  			<tr>
	  				<td class='col-sm-9'>{{ $row->name }}</td>
	  				<td class='col-sm-1'><a class="btn btn-info btn-sm" 
	  					href="{{ url('bsflist/view/'.$row->id) }}" title='View Details of this BSF'>
	  					<span class='glyphicon glyphicon-search' ></span></a></td>
	  				<td class='col-sm-1'><a class="btn btn-success btn-sm" 
	  					href="{{ url('bsflist/edit/'.$row->id) }}" title='Edit details of this BSF'>
	  					<span class='glyphicon glyphicon-edit' ></span></a></td>
	  				<td class='col-sm-1'><a class="btn btn-danger btn-sm" href="" title='Delete this BSF'>
	  					<span class='glyphicon glyphicon-trash' ></span></a></td>
	  			</tr>
	  			@endforeach	
	  		</tbody>
	  	</table>	
	   <div class="panel-footer"></div>
	</div>


@stop
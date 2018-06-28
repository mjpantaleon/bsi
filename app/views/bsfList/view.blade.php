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
	  <li><a href="{{ URL::to('bsflist/list/'.$bsf->region_id) }}">{{ $bsf->region->region }}</a></li>
	</ol>
	<!-- bread crumb section -->

	<div class="panel panel-default">
		<div class="panel-heading">
			<h5 class='lavander'><span class='glyphicon glyphicon-home text-info'></span>&nbsp;&nbsp;{{ $bsf->name }}</h5>
		</div>
		<table class='table table-bordered'>
			<tr>
				<th class='col-sm-2 caption'>Address</th>
				<td class='col-sm-10'>{{ $bsf->address }}</td>
			</tr>
			<tr>
				<th class='col-sm-2 caption'>Contact #</th>
				<td class='col-sm-10'>{{ $bsf->contact_no }}</td>
			</tr>
			<tr>
				<th class='col-sm-2 caption'>Fax #</th>
				<td class='col-sm-10'>{{ $bsf->fax_no }}</td>
			</tr>
			<tr>
				<th class='col-sm-2 caption'>Email Address</th>
				<td class='col-sm-10'>{{ $bsf->email }}</td>
			</tr>
			<tr>
				<th class='col-sm-2 caption'>Medical Doctor</th>
				<td class='col-sm-10'>{{ $bsf->head }}</td>
			</tr>
			<tr>
				<th class='col-sm-2 caption'>Class</th>
				<td class='col-sm-10'>{{ $bsf->class }}</td>
			</tr>
			<tr>
				<th class='col-sm-2 caption'>Owned By</th>
				<td class='col-sm-10'>{{ $bsf->owner }}</td>
			</tr>
			<tr>
				<th class='col-sm-2 caption'>Type</th>
				<td class='col-sm-10'>{{ $bsf->type }}</td>
			</tr>
		</table>
		

	<div class="panel-footer"></div>
	</div>


@stop
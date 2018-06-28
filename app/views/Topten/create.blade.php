@section('content')

	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li><a href="{{ URL::to('/') }}"><span class='glyphicon glyphicon-home'></span> Home</a></li>
	        <li><a href="{{ URL::to('bsi') }}"><span class='glyphicon glyphicon-file'></span> Blood Safety Indicator<span class="sr-only">(current)</span></a></li>
	        <li class="active"><a href="{{ URL::to('topten') }}"><span class='glyphicon glyphicon-tags text-info' ></span> Top 10 Blood Donation</a></li>
	        <li><a href="{{ URL::to('checklist') }}"><span class='glyphicon glyphicon-pushpin'></span> BSF Checklist</a></li>
	        <li><a href="{{ URL::to('leadbsf') }}"><span class='glyphicon glyphicon-star-empty'></span> Lead BSF</a></li>
	      </ul>
	      
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="{{ URL::to('login') }}"></a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

	<!-- bread crumb section -->
	<ol class="breadcrumb">
	  <li><a href="{{ URL::to('topten') }}">Top Ten</a></li>
	  <li class="active">Create New Top Ten List</li>
	</ol>
	<!-- bread crumb section -->

	@if(Session::get('messages'))
	<div class="alert alert-success">
		{{ Session::get('messages') }}
	</div>
	@endif


	<div class="panel panel-default">
	<div class="panel-heading"><p class='lavander'>This collection is for the period year 2016</p></div>
		<div class="panel-body">


			{{ Form::open([
			'route' => ['topten.store'],
			'method' => 'POST',
			'class' => 'form-horizontal'
			]) }}

			<div class="row">

				<table class='table table-bordered' >
					
					<tr>
						<td class='col-sm-2 caption'>Facility</td>
						<td class="{{ ($errors->has('facility') ? 'has-error' : null) }}">
							{{ Form::text('facility',null, array('placeholder' => 'Enter Facility here...',
							'class'=> 'form-control')) }}

							<div class=" col-xs-8">
								<div class="text-danger col-xs-12">{{ $errors->first('facility') }}</div>
							</div>
						</td>
					</tr>

					<tr>
						<td class='col-sm-2 caption'>Total Donation</td>
						<td class="{{ ($errors->has('donation') ? 'has-error' : null) }}">
							{{ Form::text('donation',null, array('placeholder' => 'Enter Total Donation here...',
							'class'=> 'form-control')) }}

							<div class=" col-xs-8">
								<div class="text-danger col-xs-12">{{ $errors->first('donation') }}</div>
							</div>
						</td>
					</tr>

					<tr>
						<td colspan='2'>
							<button class='btn btn-info btn-sm'>
							<span class='glyphicon glyphicon-step-forward'></span>&nbsp;&nbsp;ADD TO TOP 10 LIST</button>
						</td>
					</tr>
				</table>
			
			</div><!-- DIV ROW -->
			{{ Form::close() }}
		</div><!-- div panel BODY -->
		<div class="panel-footer"></div>
	</div><!-- DIV PANEL DEFAULT -->
@stop
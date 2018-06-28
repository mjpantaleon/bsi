@section('content')


	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li><a href="{{ URL::to('/') }}"><span class='glyphicon glyphicon-home'></span> Home</a></li>
	        <li class="active"><a href="{{ URL::to('bsi') }}"><span class='glyphicon glyphicon-file text-info'></span> Blood Safety Indicator<span class="sr-only">(current)</span></a></li>
	        <li><a href="{{ URL::to('topten') }}"><span class='glyphicon glyphicon-tags' ></span> Top 10 Blood Donation</a></li>
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
	  <li class="active">Blood Safety Indicator</li>
	</ol>
	<!-- bread crumb section -->


	@if(Session::get('message'))
	<div class="alert alert-success">
		{{ Session::get('message') }}
	</div>
	@endif



	<div class="panel panel-default">
	<div class="panel-heading"><p class='lavander'>PLEASE PROVIDE ALL THE INFORMATION NEEDED BEFORE YOU PROCEED<br>
		TO DOWNLOAD THE BSI 2017 WORKSHEET
	</p></div>
		<div class="panel-body">
			<div class="">
				<span class='note3 text-danger'><b>IMPORTANT NOTE:</b>
					Please utilize the <b>OFFICIAL BLOOD SAFETY INDICATOR (BSI) WORKSHEET 2017</b> found in the web site. 
					<b>SCANNED COPY</b> or <b>ANY UNOFFICIAL</b> Blood Safety Indicator (BSI) worksheet will not be accepted.
				</span>
			</div>

			<h3 class="text-danger">
			{{ Session::get('messages')}}
			</h3>

			{{ Form::open([
			'route' => ['bsi.store'],
			'method' => 'POST',
			'class' => 'form-horizontal'
			]) }}

			<div class="row">

				<table class='table table-bordered' >
					<tr>
						<td class='col-sm-2 caption'>Full Name</td>
						<td class="{{ ($errors->has('name') ? 'has-error' : null) }}">
							{{ Form::text('name',null, array('placeholder' => 'Enter Full name here...',
							'class'=> 'form-control')) }}
							<div class=" col-xs-8">
								<div class="text-danger col-xs-12">{{ $errors->first('name') }}</div>
							</div>
						</td>
					</tr>

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
						<td class='col-sm-2 caption'>Email Address</td>
						<td class="{{ ($errors->has('email') ? 'has-error' : null) }}">
							{{ Form::text('email',null, array('placeholder' => 'sample_email@yahoo.com',
							'class'=> 'form-control')) }}
							<div class=" col-xs-8">
								<div class="text-danger col-xs-12">{{ $errors->first('email') }}</div>
							</div>

						</td>

					</tr>

					<tr>
						<td class='col-sm-2 caption'>Contact #</td>
						<td class="{{ ($errors->has('contact') ? 'has-error' : null) }}">
							{{ Form::text('contact',null, array('placeholder' => 'Enter Contact # here...',
							'class'=> 'form-control'))  }}

							<div class=" col-xs-8">
								<div class="text-danger col-xs-12">{{ $errors->first('contact') }}</div>
							</div>
						</td>

					</tr>

					<tr>
						<td colspan='2'>
							<button class='btn btn-info btn-sm'>
							<span class='glyphicon glyphicon-step-forward'></span>&nbsp;&nbsp;PROCEED</button>
						</td>
					</tr>
				</table>
			
			</div><!-- DIV ROW -->
			{{ Form::close() }}
		</div><!-- div panel BODY -->
		<div class="panel-footer"></div>
	</div><!-- DIV PANEL DEFAULT -->
@stop
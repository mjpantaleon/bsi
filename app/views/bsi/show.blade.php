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
	  <li><a href="{{ URL::to('bsi') }}">Blood Safety Indicator</a></li>
	  <li class="active">Download/Upload BSI report</li>
	</ol>
	<!-- bread crumb section -->



	<div class="panel panel-default">
	  <div class="panel-heading"><p class='lavander'>PLEASE FOLLOW THE INSTRUCTIONS BELOW</p></div>
	  <div class="panel-body">

	  	<h3 class="text-danger">
		{{ Session::get('messages')}}
		</h3>

		
		
		{{ Form::open([
			'method' => 'POST',
			'class' => 'form-horizontal',
			'files' => true
		]) }}

		<div class="row">

			<table class='table table-bordered' >

				<tr>
					<td class='col-sm-2 caption text-danger' colspan="2">
						<span class='note3'>* IF YOU ALREADY HAVE A COPY OF YOUR ACCOMPLISHED BSI REPORT JUST
							PROCEED TO UPLOAD (STEP 3 to STEP 5)
						</span>
					</td>
				</tr>


				<tr>
					<td class='col-sm-2 caption text-primary' colspan="2">
						DOWNLOAD
					</td>
				</tr>


				<tr>
					<td class='col-sm-2 caption'>STEP 1</td>
					<td>Download the latest<a href="{{ URL::to('downloadables/Blood Safety Indicator 2017 Blank Form.xlsx') }}">
						Blood Safety Indicator Form</a> 2017.
					</td>
				</tr>

				<tr>
					<td class='col-sm-2 caption'>STEP 2</td>
					<td>
						Fill-up the Blood Safety Indicator (BSI) form.
						<span class='note2 text-danger'>*Please DO NOT leave any blank inputs in Section 1, 
						specially the email & contact #</span>
					</td>
				</tr>


				<tr>
					<td class='col-sm-2 caption text-primary' colspan="2">
					UPLOAD
					</td>
				</tr>

				<tr>
					<td class='col-sm-2 caption'>STEP 3</td>
					<td>
						Rename your <b>Blood Safety Indicator Form</b> period 2017 based on your 
						<b>Blood Service Facility (BSF)</b> name
						before uploading the file
					</td>

				</tr>

				<tr>
					<td class='col-sm-2 caption'>STEP 4</td>
					<td class="{{ ($errors->has('region') ? 'has-error' : null) }}">
						{{ Form::select('region', $regions,'Select your Region', ['class' => 'form-control'])  }}
					<div class="text-danger col-xs-12">{{ $errors->first('region') }}</div>
				</td>

				</tr>

				<tr>
					<td class='col-sm-2 caption'>STEP 5</td>
					<td class="{{ ($errors->has('contact') ? 'has-error' : null) }}">
						{{ Form::file('file',null,['class' => 'form-control']) }}
						<div class="text-danger col-xs-12">{{ $errors->first('file') }}</div>
					</td>

				</tr>

				<tr>
					<td colspan='2'>
						<button class='btn btn-info btn-sm'>
						<span class='glyphicon glyphicon-upload'></span>&nbsp;&nbsp;UPLOAD BSI REPORT</button>
					</td>
				</tr>
			</table>
		
		</div><!-- DIV ROW -->

		{{ Form::close() }}
	  </div>
	  <div class="panel-footer"></div>
	</div>







@stop
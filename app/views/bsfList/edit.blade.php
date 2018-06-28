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
		<!-- USE FORM::MODEL to supply model values to fields + method => PUT!! -->
		{{ Form::model($bsf,[
			'method' => 'PUT',
			'class' => 'form-horizontal'
		]) }}
		<!-- USE FORM::MODEL to supply model values to fields -->
		<table class='table table-bordered'>
			<tr>
				<th class='col-sm-2 caption'>Address</th>
				<td class='col-sm-10 {{ $errors->has("address") ? "has-error" : null }}'>
					{{ Form::text('address', null, array('placeholder' => 'Blk., Lt., St., Brgy., Municipality/City',
					'class'=> 'form-control')) }}
					<!-- IF THIS FIELD IS LEFT EMPTY -->
					@if($errors->has('address'))
					<div class="col-xs-12 text-danger">
						{{ $errors->first('address') }}
						<!--Fill-up this field  Static -->
					</div>
					@endif
					<!-- IF THIS FIELD IS LEFT EMPTY -->
				</td>
			</tr>
			<tr>
				<th class='col-sm-2 caption'>Contact #</th>
				<td class='col-sm-10 {{ $errors->has("contact") ? "has-error" : null }}'>
					{{ Form::text('contact_no', null, array('placeholder' => '0905-XXX-XXXX / 02-XXX-XXXX',
					'class'=> 'form-control' )) }}
					<!-- IF THIS FIELD IS LEFT EMPTY -->
					@if($errors->has('contact_no'))
					<div class="col-xs-12 text-danger">
						{{ $errors->first('contact_no') }}
						<!--Fill-up this field  Static -->
					</div>
					@endif
					<!-- IF THIS FIELD IS LEFT EMPTY -->
				</td>
			</tr>
			<tr>
				<th class='col-sm-2 caption'>Fax #</th>
				<td class='col-sm-10'>{{ Form::text('fax_no', null, array('placeholder' => 'Optional',
					'class'=> 'form-control' )) }}
					<!-- IF THIS FIELD IS LEFT EMPTY -->
					@if($errors->has('fax_no'))
					<div class="col-xs-12 text-danger">
						{{ $errors->first('fax_no') }}
						<!--Fill-up this field  Static -->
					</div>
					@endif
					<!-- IF THIS FIELD IS LEFT EMPTY -->
				</td>
			</tr>
			<tr>
				<th class='col-sm-2 caption'>Email Address</th>
				<td class='col-sm-10 {{ $errors->has("email") ? "has-error" : null }}'>
					{{ Form::text('email', null, array('placeholder' => 'sample_email@gmail.com',
					'class'=> 'form-control' )) }}
					<!-- IF THIS FIELD IS LEFT EMPTY -->
					@if($errors->has('email'))
					<div class="col-xs-12 text-danger">
						{{ $errors->first('email') }}
						<!--Fill-up this field  Static -->
					</div>
					@endif
					<!-- IF THIS FIELD IS LEFT EMPTY -->
				</td>
			</tr>
			<tr>
				<th class='col-sm-2 caption'>Medical Doctor</th>
				<td class='col-sm-10 {{ $errors->has("head") ? "has-error" : null }}'>
					{{ Form::text('head', null, array('placeholder' => 'Dr. Juan Dela Cruz',
					'class'=> 'form-control' )) }}
					<!-- IF THIS FIELD IS LEFT EMPTY -->
					@if($errors->has('head'))
					<div class="col-xs-12 text-danger">
						{{ $errors->first('head') }}
						<!--Fill-up this field  Static -->
					</div>
					@endif
					<!-- IF THIS FIELD IS LEFT EMPTY -->
				</td>
			</tr>
			<tr>
				<th class='col-sm-2 caption'>Class</th>
				<td class='col-sm-10 {{ $errors->has("class") ? "has-error" : null }}'>
					{{ Form::select('class', [
					   '' => 'Select Class',
					   'Level 2' => 'Level 2',
					   'Level 3' => 'Level 3']
					   , null, ['class' => 'form-control']
					) }}

					<!-- IF THIS FIELD IS LEFT EMPTY -->
					@if($errors->has('class'))
					<div class="col-xs-12 text-danger">
						{{ $errors->first('class') }}
						<!--Fill-up this field  Static -->
					</div>
					@endif
					<!-- IF THIS FIELD IS LEFT EMPTY -->
				</td>
			</tr>
			<tr>
				<th class='col-sm-2 caption'>Owned By</th>
				<td class='col-sm-10 {{ $errors->has("owner") ? "has-error" : null }}'>
					{{ Form::select('owner', [
					   '' => 'Select Owner',
					   'DOH' => 'DOH',
					   'LGU' => 'LGU',
					   'PRV' => 'PRV',
					   'PRC' => 'PRC']
					   , null, ['class' => 'form-control']
					) }}

					<!-- IF THIS FIELD IS LEFT EMPTY -->
					@if($errors->has('owner'))
					<div class="col-xs-12 text-danger">
						{{ $errors->first('owner') }}
						<!--Fill-up this field  Static -->
					</div>
					@endif
					<!-- IF THIS FIELD IS LEFT EMPTY -->
				</td>
			</tr>
			<tr>
				<th class='col-sm-2 caption'>Type</th>
				<td class='col-sm-10 {{ $errors->has("type") ? "has-error" : null }}'>
					{{ Form::select('type', [
					   '' => 'Select Type',
					   'BB' => 'BB',
					   'BS' => 'BS',
					   'BCU' => 'BCU']
					   , null, ['class' => 'form-control']
					) }}

					<!-- IF THIS FIELD IS LEFT EMPTY -->
					@if($errors->has('type'))
					<div class="col-xs-12 text-danger">
						{{ $errors->first('type') }}
						<!--Fill-up this field  Static -->
					</div>
					@endif
					<!-- IF THIS FIELD IS LEFT EMPTY -->
				</td>
			</tr>
			<tr>
				<td>
					<button class='btn btn-sm btn-info'><span class='glyphicon glyphicon-save'></span> 
						UPDATE DETAILS</button>
	  			</td>
	  			<td></td>
			</tr>
		</table>
		{{ Form::close() }}
		

	<div class="panel-footer"></div>
	</div>


@stop
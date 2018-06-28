@section('content')
	

	@if(Session::get('messages'))
	<div class="alert alert-success">
		{{ Session::get('messages') }}
	</div>
	@endif
	
	
	{{ Form::open([
		'route' => ['reports.store'],
		'method' => 'POST',
		'class' => 'form-horizontal',
	]) }}

	<div class="panel panel-danger">
	  <div class="panel-heading"><h5 class="lavander">NATIONAL CONSOLIDATED</h5></div>
	  	<table class="table table-bordered">
	  		<tbody>
	  			<tr>
	  				<th class="col-md-3">Region</th>
	  				<td class="col-md-9 {{ ($errors->has('region') ? 'has-error' : null) }}">
	  					{{ Form::select('region', $regions,'Select your Region', ['class' => 'form-control'])  }}
	  					<div class=" col-xs-8">
							<div class="text-danger col-xs-12">{{ $errors->first('region') }}</div>
						</div>
	  				</td>
	  			</tr>
	  			
	  			<tr>
	  				<th class="col-md-3">Facility</th>
	  				<td class="col-md-9 {{ ($errors->has('facility') ? 'has-error' : null) }}">
	  					{{ Form::text('facility',null, array('placeholder' => 'Enter Facility here...',
							'class'=> 'form-control')) }}
						<div class=" col-xs-8">
							<div class="text-danger col-xs-12">{{ $errors->first('facility') }}</div>
						</div>
	  				</td>
	  			</tr>

	  			<tr>
	  				<td class="col-md-9" colspan="2">&nbsp;</td>
	  			</tr>

	  			<tr>
	  				<th class="col-md-3">Total donation</th>
	  				<td class="col-md-9 {{ ($errors->has('donation') ? 'has-error' : null) }}">
	  					{{ Form::text('donation',null, array('placeholder' => 'Enter Total Donation here...',
							'class'=> 'form-control')) }}
	  					<div class=" col-xs-8">
							<div class="text-danger col-xs-12">{{ $errors->first('donation') }}</div>
						</div>
	  				</td>
	  			</tr>

	  			<tr>
	  				<th class="col-md-3">Voluntary</th>
	  				<td class="col-md-9 {{ ($errors->has('voluntary') ? 'has-error' : null) }}">
	  					{{ Form::text('voluntary',null, array('placeholder' => 'Enter Voluntary Donation here...',
							'class'=> 'form-control')) }}
	  					<div class=" col-xs-8">
							<div class="text-danger col-xs-12">{{ $errors->first('voluntary') }}</div>
						</div>
	  				</td>
	  			</tr>

	  			<tr>
	  				<th class="col-md-3">Replacement</th>
	  				<td class="col-md-9 {{ ($errors->has('replacement') ? 'has-error' : null) }}">
	  					{{ Form::text('replacement',null, array('placeholder' => 'Enter Family/Replacement Donation here...',
							'class'=> 'form-control')) }}
	  					<div class=" col-xs-8">
							<div class="text-danger col-xs-12">{{ $errors->first('replacement') }}</div>
						</div>
	  				</td>
	  			</tr>


	  			<tr>
	  				<th class="col-md-3">Paid</th>
	  				<td class="col-md-9 {{ ($errors->has('paid') ? 'has-error' : null) }}">
	  					{{ Form::text('paid',null, array('placeholder' => 'Enter Paid Donation here...',
							'class'=> 'form-control')) }}
	  					<div class=" col-xs-8">
							<div class="text-danger col-xs-12">{{ $errors->first('paid') }}</div>
						</div>
	  				</td>
	  			</tr>


	  			<tr>
	  				<td class="col-md-9" colspan="2">&nbsp;</td>
	  			</tr>


	  			<tr>
	  				<th class="col-md-3">1st time</th>
	  				<td class="col-md-9 {{ ($errors->has('first_time') ? 'has-error' : null) }}">
	  					{{ Form::text('first_time',null, array('placeholder' => 'Enter 1st Time Donation here...',
							'class'=> 'form-control')) }}
	  					<div class=" col-xs-8">
							<div class="text-danger col-xs-12">{{ $errors->first('first_time') }}</div>
						</div>
	  				</td>
	  			</tr>


	  			<tr>
	  				<th class="col-md-3">Repeat donor</th>
	  				<td class="col-md-9 {{ ($errors->has('repeat') ? 'has-error' : null) }}">
	  					{{ Form::text('repeat',null, array('placeholder' => 'Enter Repeat Donation here...',
							'class'=> 'form-control')) }}
	  					<div class=" col-xs-8">
							<div class="text-danger col-xs-12">{{ $errors->first('repeat') }}</div>
						</div>
	  				</td>
	  			</tr>


	  			<tr>
	  				<td class="col-md-9" colspan="2">&nbsp;</td>
	  			</tr>


	  			<tr>
	  				<th class="col-md-3">Owner</th>
	  				<td class="col-md-9">
	  					{{ Form::select('owner', ['DOH' => 'DOH', 'LGU' => 'LGU', 'PRIV' => 'PRIV', 'PRC' => 'PRC'], 
	  					 null, array('class' => 'form-control')) }}
	  				</td>
	  			</tr>



	  			<tr>
	  				<th class="col-md-3">Period year</th>
	  				<td class="col-md-9 {{ ($errors->has('period_year') ? 'has-error' : null) }}">
	  					{{ Form::text('period_year',null, array('placeholder' => 'Enter Period Year here...',
							'class'=> 'form-control')) }}
	  					<div class=" col-xs-8">
							<div class="text-danger col-xs-12">{{ $errors->first('period_year') }}</div>
						</div>
	  				</td>
	  			</tr>
	  			
	  		</tbody>
	  	</table>
	</div> 

	<div class="row">
		<button class='btn btn-info btn-sm'>
		<span class='glyphicon glyphicon-upload'></span>&nbsp;&nbsp;SAVE</button>
	</div>
	{{ Form::close() }}
@stop
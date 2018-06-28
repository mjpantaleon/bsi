@section('content')

	<script>
	<!--
	function timedRefresh(timeoutPeriod) {
		setTimeout("location.reload(true);",timeoutPeriod);
	}

	window.onload = timedRefresh(60000);

	//   -->
	</script>

	<!-- content -->
	
	<div class="col-md-8">
		<div class="panel panel-danger">
		  <div class="panel-heading"><h5 class="lavander">DOWNLOAD LOGS</h5></div>
		  	<table class="table table-bordered table-hover table-striped table-dark">
		  		<thead>
			  		<th class="col-md-2">seq id</th>
			  		<th class="col-md-3">name</th>
			  		<th class="col-md-3">facility</th>
			  		<th class="col-md-1">contact #</th>
			  		<th class="col-md-1">email</th>
			  		<th class="col-md-2">date</th>
		  		</thead>
		  		<tbody>
		  			@foreach($downloads as $download)
		  			<tr>
			  			<td><span class="text-primary"><b>{{ $download->seq_num }}</b></span></td>
			  			<td>{{ $download->FN }}</td>
			  			<td>{{ $download->BSF }}</td>
			  			<td>{{ $download->CN }}</td>
			  			<td>{{ $download->EM }}</td>
			  			<td style="font-style: italic;">
			  				<span class="text-primary">
			  					{{ date("F d, Y (D) - h:i:s A",strtotime($download->dateTime)) }}
			  				</span>
			  			</td>
		  			</tr>
		  			@endforeach
		  		</tbody>
		  	</table>
		</div>

	</div>


	<div class="col-md-4">
		<div class="panel panel-danger">
		  <div class="panel-heading"><h5 class="lavander">UPLOAD LOGS</h5></div>
		  	<table class="table table-bordered table-hover">
		  		<thead>
			  		<th class="col-md-2">seq id</th>
			  		<th class="col-md-7">file name</th>
			  		<th class="col-md-3">date</th>
			  	</thead>
		  		<tbody>
		  			@foreach($uploads as $upload)
		  			<tr>
		  				<td><span class="text-primary"><b>{{ $upload->seq_num }}</b></span></td>
		  				<td>{{ $upload->file_name }}</td>
		  				<td style="font-style: italic;">
			  				<span class="text-primary">
			  					{{ date("F d, Y h:i:s A - (D)",strtotime($upload->DT)) }}
			  				</span>
			  			</td>
		  			</tr>
		  			@endforeach
		  		</tbody>
		  	</table>
		</div>
	</div>

	<!-- content -->

@stop
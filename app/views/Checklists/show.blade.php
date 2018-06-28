@section('content')

	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li><a href="{{ URL::to('/') }}"><span class='glyphicon glyphicon-home'></span> Home</a></li>
	        <li><a href="{{ URL::to('bsi') }}"><span class='glyphicon glyphicon-file'></span> Blood Safety Indicator<span class="sr-only">(current)</span></a></li>
	        <li><a href="{{ URL::to('topten') }}"><span class='glyphicon glyphicon-tags' ></span> Top 10 Blood Donation</a></li>
	        <li class="active"><a href="{{ URL::to('checklist') }}"><span class='glyphicon glyphicon-pushpin text-info'></span> BSF Checklist</a></li>
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
	  <li><a href="{{ URL::to('checklist') }}">BSF Checklist</a></li>
	  <li class="active">Blood Service Facilities</li>
	</ol>
	<!-- bread crumb section -->

	<div class="panel panel-default">
	  <div class="panel-heading">
	  	<h5 class='lavander'>{{ $region->region }}</h5>
	  	<span>* NOTE: NO check [ <span class="glyphicon glyphicon-ok text-success"></span> ] means NO offical BSI report under that period year. <br>
	  		For questions/concerns regarding your BSI report History, Do not hesitate to call or email us.</span>
	  </div>
	  	<table class="table table-bordered make-dataTable">
	  		<thead>
	  			<tr></tr>
	  			<tr>
	  				<th>Blood Service Facility</th>
	  				<?php $s = $start_year; ?>
	  				@while($s <= $max_year)
	  				<th>{{$s}}</th>

	  				<?php $s++ ?>

	  				@endwhile
	  			</tr>
	  		</thead>

	  		<tbody>
	  			@foreach($display as $row)
	  			<tr>
	  			 	<td>{{ $row['name'] }}</td>
	  			 	<?php $s = $start_year; ?>
	  			 	@while($s <= $max_year)
	  				<th>
	  					@if(isset($row[$s]))
		  					@if($row[$s] == 1)
		  						<span class="glyphicon glyphicon-ok text-success"></span>
		  					@else
		  						<span class="glyphicon glyphicon-ok ligth_gray"></span>
		  					@endif
	  					@else
		  					<span class="glyphicon glyphicon-ok ligth_gray"></span>

	  					@endif
	  				</th>

	  				<?php $s++ ?>
	  				@endwhile
	  			</tr>
	  			@endforeach
	  		</tbody>
	  	</table>	
	   <div class="panel-footer"></div>
	</div>


	<!-- data-table script -->
	<script type="text/javascript">
    $(document).ready(function() {  
        $('.make-dataTable').dataTable();             
        $('.has-tooltip').tooltip();                      
    });
    </script>
	<!-- data-table script -->



@stop
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

	
	<ol class="breadcrumb">
		<span class='note red'>* NOTE: Please be adviced that the lists shown below is subjected to change, specially
			those reports whose data collection period is still on going.</span>
	</ol>


	<div class="row">
		<div class='col-md-6 col-sm-6'>
			<div class="panel panel-default">
			  <div class="panel-heading"><h4 class='lavander'>2016</h4></div>

			  <table class='table table-bordered'>
			  	  @foreach($top2016 as $final2016)		
				  <tr>
				  	<td><span class='glyphicon glyphicon-play'></span> {{ $final2016->BSF }}</td>
				  	<td>(<span class='lavander'>{{ number_format($final2016->TD) }}</span>)</td>
				  </tr>
				  @endforeach
			  </table>

			</div>
		</div>

		<div class='col-md-6 col-sm-6'>
			<div class="panel panel-default">
			  <div class="panel-heading"><h4 class='lavander'>2015</h4></div>

			  <table class='table table-bordered'>
			  	  @foreach($top2015 as $final2015)		
				  <tr>
				  	<td><span class='glyphicon glyphicon-play'></span> {{ $final2015->BSF }}</td>
				  	<td>(<span class='lavander'>{{ number_format($final2015->TD) }}</span>)</td>
				  </tr>
				  @endforeach
			  </table>

			</div>
		</div>	

	</div><!-- end row -->

	<div class='row'>
		<div class='col-md-6 col-sm-6'>
			<div class="panel panel-default">
			  <div class="panel-heading"><h4 class='lavander'>2014</h4></div>

			  <table class='table table-bordered'>
			  	  @foreach($top2014 as $final2014)		
				  <tr>
				  	<td><span class='glyphicon glyphicon-play'></span> {{ $final2014->BSF }}</td>
				  	<td>(<span class='lavander'>{{ number_format($final2014->TD) }}</span>)</td>
				  </tr>
				  @endforeach
			  </table>

			</div>
		</div>


		<div class='col-md-6 col-sm-6'>
			<div class="panel panel-default">
			  <div class="panel-heading"><h4 class='lavander'>2013</h4></div>

			   <table class='table table-bordered'>
			  	  @foreach($top2013 as $final2013)		
				  <tr>
				  	<td><span class='glyphicon glyphicon-play'></span> {{ $final2013->BSF }}</td>
				  	<td>(<span class='lavander'>{{ number_format($final2013->TD) }}</span>)</td>
				  </tr>
				  @endforeach
			  </table>

			</div>
		</div>
		
		
	</div><!-- end row -->

	<div class='row'>
		<div class='col-md-6 col-sm-6'>
			<div class="panel panel-default">
			  <div class="panel-heading"><h4 class='lavander'>2012</h4></p></div>

			   <table class='table table-bordered'>
			  	  @foreach($top2012 as $final2012)		
				  <tr>
				  	<td><span class='glyphicon glyphicon-play'></span> {{ $final2012->BSF }}</td>
				  	<td>(<span class='lavander'>{{ number_format($final2012->TD) }}</span>)</td>
				  </tr>
				  @endforeach
			  </table>

			</div>
		</div>


		<div class='col-md-6 col-sm-6'>
			<div class="panel panel-default">
			  <div class="panel-heading"><h4 class='lavander'>2011</h4></div>

			   <table class='table table-bordered'>
			  	  @foreach($top2011 as $final2011)		
				  <tr>
				  	<td><span class='glyphicon glyphicon-play'></span> {{ $final2011->BSF }}</td>
				  	<td>(<span class='lavander'>{{ number_format($final2011->TD) }}</span>)</td>
				  </tr>
				  @endforeach
			  </table>

			</div>
		</div>
	</div><!-- end row -->


@stop
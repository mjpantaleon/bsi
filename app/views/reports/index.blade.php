@section('content')

	{{ View::make("reports.index-js.main")->withReportYear($report_year)->render() }}

	<script src="vendor/canvasjs/canvasjs.min.js"></script>

	<div class="row">
		<h4 class="lavander note2">
			<span class="glyphicon glyphicon-info-sign"></span>
			<b>NOTE: THE AVAILABLE DATA WAS COLLECTED LAST (
			{{ date("F d, Y - D",strtotime($results->last()->created_at)) }} )</b>
		</h4>
	</div>

	<!-- ||||||||||||||||||||||||||||||||||| DASHBOARD WIDGET ||||||||||||||||||||||||||||||||||| -->
	<div class="row">
		<div class="col-md-4">
			<div class="widget-wrap black">
				<div class="widget-header">TOTAL BSF WITH BSI REPORT {{ $results->last()->period_year }}</div>
				<div class="widget-icon"><span class="glyphicon glyphicon-home"></span></div>
				<div class="widget-line gray"></div>
				<div class="widget-body">{{ $results->count() }}</div>
				<div class="widget-remarks">as of {{ date("F d, Y - D",strtotime($results->last()->created_at)) }}</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="widget-wrap orange">
				<div class="widget-header">TOTAL DONATION</div>
				<div class="widget-icon"><span class="glyphicon glyphicon-tint"></span></div>
				<div class="widget-line orange"></div>
				<div class="widget-body">{{ number_format($results->sum('total_donation')) }}</div>
				<div class="widget-remarks">as of {{ date("F d, Y - D",strtotime($results->last()->created_at)) }}</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="widget-wrap blue">
				<div class="widget-header">DATA COLLECTION PERCENTAGE</div>
				<div class="widget-icon"><span class="glyphicon glyphicon-pushpin"></span></div>
				<div class="widget-line blue"></div>
				<div class="widget-body">{{ number_format($results->sum('total_donation')/1000000 * 100, 2) }}%</div>
				<div class="widget-remarks">as of {{ date("F d, Y - D",strtotime($results->last()->created_at)) }}</div>
			</div>
		</div>
	</div>
	<!-- ||||||||||||||||||||||||||||||||||| DASHBOARD WIDGET ||||||||||||||||||||||||||||||||||| -->


	<div class="panel panel-default">
		<div class="panel-body">
			<div class="row">
				<div id="chartContainer" style="height: 400px; width: 100%;"></div>
			</div>
		</div>
	</div>

	<div class="panel panel-default">
		<div class="panel-body">
			<div class="row">
				<div id="chartDOH" style="height: 400px; width: 100%;"></div>
			</div>
		</div>
	</div>

	<div class="panel panel-default">
		<div class="panel-body">
			<div class="row">
				<div id="chartLGU" style="height: 400px; width: 100%;"></div>
			</div>
		</div>
	</div>

	<div class="panel panel-default">
		<div class="panel-body">
			<div class="row">
				<div id="chartPRIV" style="height: 400px; width: 100%;"></div>
			</div>
		</div>
	</div>

	<div class="panel panel-default">
		<div class="panel-body">
			<div class="row">
				<div id="chartPRC" style="height: 400px; width: 100%;"></div>
			</div>
		</div>
	</div>

	<div class="panel panel-default">
		<div class="panel-body">
			<div class="row">
				<div id="chartDonor" style="height: 400px; width: 100%;"></div>
			</div>
		</div>
	</div>

	<div class="panel panel-default">
		<div class="panel-body">
			<div class="row">
				<div id="chartOverall" style="height: 400px; width: 100%;"></div>
			</div>
		</div>
	</div>

	<!-- ||||||||||||||||||||| DOWNLOAD OFFICIAL REPORT LINK |||||||||||||||||| -->
	
	<div class="row">
		<div class="well">
			<a href="{{ URL::to('downloadables/BSI OFFICIAL REPORT (2017).xlsx') }}" 
				title="Click to download">Download Official BSI report 2017</a> 
			as of {{ date("F d, Y - D",strtotime($results->last()->created_at)) }}</div>
	</div>

@stop
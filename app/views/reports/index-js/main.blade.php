<script type="text/javascript">

	getPercent = function(total,value){
		return Math.round((value/total) * 100);
	}

	var Scripts = [];	// Scripts Queue
</script>

<!-- Add items to Scripts -->
{{ View::make("reports.index-js.national")->withReportYear($report_year)->render() }}
{{ View::make("reports.index-js.doh")->withReportYear($report_year)->render() }}
{{ View::make("reports.index-js.lgu")->withReportYear($report_year)->render() }}
{{ View::make("reports.index-js.priv")->withReportYear($report_year)->render() }}
{{ View::make("reports.index-js.prc")->withReportYear($report_year)->render() }}
{{ View::make("reports.index-js.donors")->withReportYear($report_year)->render() }}
{{ View::make("reports.index-js.overall")->withReportYear($report_year)->render() }}

<script type="text/javascript">
	
	/*RUN THE SCRIPTS*/
	window.onload = function(){
		for(i in Scripts){
			script = Scripts[i];
			script();
		}
	}
</script>
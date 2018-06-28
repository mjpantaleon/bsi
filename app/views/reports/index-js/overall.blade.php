<script type="text/javascript">
	Scripts.push(function(){
		/* |||||||||||||||||||||||||||||||||||||||||||| OVERALL |||||||||||||||||||||||||||||||||||||||||||||||||||||| */
		var overAllDataPoints = [];
		$.ajax({
			type: 'GET',
			url: '{{ url("pie_overall/$report_year") }}',
			dataType: 'json',
			success: function(data){

				for(i in data.result){
					r = data.result[i];

					singleDataPoint = {
						label : r.OWNER,
						y : r.TOTAL,
						p : getPercent(data.total,r.TOTAL)
					};

					overAllDataPoints.push(singleDataPoint);
				}

				
				
				var chart = new CanvasJS.Chart("chartOverall", {
				title: {
					text: "Overall contribution per Ownership ({{$report_year}})"
				},
				animationEnabled: true,
				theme: "theme3",
				data: [
				{
					type: "pie",
					showInLegend: true,
					toolTipContent: "{y} - {p} %",
					/*ValueFormatString: "#0.#,,. Million",*/
					legendText: "{indexLabel}",

					dataPoints: overAllDataPoints
				}
				]
			});

			chart.render();

			}/* end success: function(data) */
		});/* end #.ajax */		
	});
	
</script>
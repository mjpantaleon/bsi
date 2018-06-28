<script type="text/javascript">
	Scripts.push(function(){
		/* |||||||||||||||||||||||||||||||||||||||||||| DONORS |||||||||||||||||||||||||||||||||||||||||||||||||||||| */
			var dataPoints = [];
			$.ajax({
				type: 'GET',
				url: '{{ url("pie_donors/$report_year") }}',
				dataType: 'json',
				success: function(data){

					total = (data.REPEAT*1) + (data.FIRSTTIME*1);

					dataPoints = [
						{
							label : "Repeat",
							y : data.REPEAT,
							p : getPercent(total,data.REPEAT)
						},
						{
							label : "First Time",
							y : data.FIRSTTIME,
							p : getPercent(total,data.FIRSTTIME)
						}
					];
					
					var chart = new CanvasJS.Chart("chartDonor", {
					title: {
						text: "First Time and Repeat Donors ({{$report_year}})"
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

						dataPoints: dataPoints
					}
					]
				});

				chart.render();

				}/* end success: function(data) */
			});/* end #.ajax */
	});
</script>
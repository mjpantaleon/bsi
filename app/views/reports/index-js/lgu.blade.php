<script type="text/javascript">
	Scripts.push(function(){
		/* |||||||||||||||||||||||||||||||||||||||||||| LGU |||||||||||||||||||||||||||||||||||||||||||||||||||||| */
		var dataPoints = [];
		$.ajax({
			type: 'GET',
			url: '{{ url("pie_lgu/$report_year") }}',
			dataType: 'json',
			success: function(data){

				total = (data.VOLUNTARY*1) + (data.REPLACEMENT*1) + (data.PAID*1);

				dataPoints = [
					{
						label : "Voluntary",
						y : data.VOLUNTARY,
						p : getPercent(total,data.VOLUNTARY)
					},
					{
						label : "Replacement",
						y : data.REPLACEMENT,
						p : getPercent(total,data.REPLACEMENT)
					},
					{
						label : "Paid",
						y : data.PAID,
						p : getPercent(total,data.PAID)
					}
				];
				
				var chart = new CanvasJS.Chart("chartLGU", {
				title: {
					text: "LGU - Voluntary, Family/Replacement and Paid Donations ({{$report_year}})"
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
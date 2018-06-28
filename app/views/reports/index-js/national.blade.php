<script type="text/javascript">
	
	Scripts.push(function(){
		/* |||||||||||||||||||||||||||||||||||||||||||| NATIONAL |||||||||||||||||||||||||||||||||||||||||||||||||||||| */
		var dataPoints = [];

		$.ajax({
			type: 'GET',
			url: '{{ url("pie_national/$report_year") }}',
			dataType: 'json',
			success: function(data){

				total = (data.VOLUNTARY*1) + (data.REPLACEMENT*1) + (data.PAID*1);

				dataPoints = [
					{
						label : "Voluntary",
						y : data.VOLUNTARY,
						p : getPercent(total,data.VOLUNTARY),
						name : "Voluntary"
					},
					{
						label : "Replacement",
						y : data.REPLACEMENT,
						p : getPercent(total,data.REPLACEMENT),
						name : "Replacement"
					},
					{
						label : "Paid",
						y : data.PAID,
						p : getPercent(total,data.PAID),
						name : "Paid"
					}
				];
				
				var chart = new CanvasJS.Chart("chartContainer", {
					title: {
						text: "National - Voluntary, Family/Replacement and Paid Donations ({{$report_year}})"
					},
					animationEnabled: true,
					theme: "theme3",
					data: [
						{
							indexLabelPlacement: "outside",
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
	})
</script>
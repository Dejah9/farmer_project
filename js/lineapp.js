/*global $*/
/*global Chart*/
/*global food*/
/*global amount*/

$(document).ready(function(){
	$.ajax({
		url:'data.php',
		method: "GET",
		success: function(data){
			console.log(data);
			var produce = [];
			var amount1 = [];
			
			for (var i in data) {
				produce.push(data[i].food);
				amount1.push(data[i].amount);
			}
			
			var chartdata = {
				labels: produce,
				datasets: [
				{
					label : 'Produce Collected',
					backgroundColor: 'rgba(200,200,200,0.75)',
					borderColor: 'rgba(200,200,200,0.75)',
					hoverBackgroundCOlor: 'rgba(200,200,200, 1)',
					hoverBorderColor: 'rgba(200,200,200,1)',
					data: amount1
				}
				]

			};

			var ctx =  $('#mycanvas');
			var barGraph = new Chart(ctx,{
				type: 'line',
				data: chartdata
			});

		},
		error: function(data){
			console.log(data);
		}
	});
});
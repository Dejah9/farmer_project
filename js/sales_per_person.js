/*global $*/
/*global Chart*/
/*global food*/
/*global amount*/
/*global month1*/


$(document).ready(function(){
	$("#form").on("submit", function(e){
		var farmer_id = $('[name="farmer_id"]').val();
		//var EndDate = $('[name="EndDate"]').val();
		event.preventDefault();
		$.ajax({
			url:"sales_per_person.php",
			type: "POST",
			data: { 
				farmer_id : farmer_id
				//EndDate : EndDate
			},
			dataType: "json",
			success: function(data){
				//console.log("testing");
				
				//console.log("its working");
				//console.log(data);
				var produce = [];
				var amount1 = [];
				var month1 = [];
				
				for (var i in data) {
					produce.push(data[i].food);
					amount1.push(data[i].amount);
					month1.push(data[i].month_name)
				}
				
				var chartdata = {
					labels: month1,
					datasets: [
					{
						label : produce,
						backgroundColor: ['rgba(200,200,200,0.75)','navy','red','purple','green','orange','yellow'],
						borderColor: 'rgba(200,200,200,0.75)',
						hoverBackgroundCOlor: 'rgba(200,200,200, 1)',
						hoverBorderColor: 'rgba(200,200,200,1)',
						data: amount1
					}
					]
	
				};
	
				var ctx =  $('#mycanvas');
				var barGraph = new Chart(ctx,{
					type: 'horizontalBar',
					data: chartdata
				});
	
			},
			error: function(data){
				console.log(data);
				console.log(farmer_id);
			}
		});
	
	});
});
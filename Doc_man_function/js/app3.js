$(document).ready(function(){
	$.ajax({
		url:"http://localhost/src/data.php",
		method:"GET",
		success:function(data){
		//console.log(data);},
		    var affliction = [];
			var counts = [];
			var col = [];
				for(var i in data){
				affliction.push(data[i].Affliction);
				counts.push(data[i].Count);
				col.push('blue');	
				}
				//console.log(affliction);
				//console.log(counts);
				
				var chartdata = {
					labels :affliction,
					datasets:[{
					label : "Afflictions of the Month",
					backgroundColor:'#21B6A8',
					data:counts
					}]};
					
			var ctx = document.getElementById("mycanvas");
			var barGraph = new Chart(ctx,{
				type :'bar',
				data :chartdata,
				options :{
					
		                legend :{display : false},
	                    title:{
							   display:true,
							   //text :'Monthy Highest Affliction'
	                          }
	}
			});
		},
		
		error:function(data){
			//console.log(data);
		}
	});
	});















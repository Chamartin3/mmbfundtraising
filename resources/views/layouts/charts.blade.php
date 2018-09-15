<link href="{{ asset('css/cards.css') }}" rel="stylesheet" type="text/css">

<div class="row mb-5">
	<div class="col-5">
	<div id="canvas-holder" style="width:100%; height: 200px">
		<canvas height="110px" id="chart-area"></canvas>
	</div>		
	</div>
	<div class="col">

			<div class="card text-white o-hidden h-80" style="background-color: #06195E">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-phone"></i>
                  </div>
                  <div class="mr-5">שיחות שבוצעו </div>
                </div>
                <div>
                	<a  class="text-white" href="{{ route('calls') }}"">
                	<h1 class="mb-3 ml-3"> {{App\Donor::TotalCalls()}} </h1>
                </a>
                </div>          
              </div>
		

	</div>
	<div class="col">
		
			<div class="card text-white  o-hidden h-80" style="background-color: #06195E">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-money-bill-wave"></i>
                  </div>
                  <div class="mr-5">סה"כ תרומות  </div>
                </div>
                <div>
                	<h1 class="mb-3 ml-3"> {{App\Donor::TotalColected()  }}</h1>
                </div>
               </div>

		
	</div>

</div>


	<script>
		var randomScalingFactor = function() {
			return Math.round(Math.random() * 100);
		};

		var config = {
			type: 'pie',
			data: {
				datasets: [{
					data: [
					{{App\Donor::NotRespond()}}, 
					{{App\Donor::Donated()}}, 
					{{App\Donor::Later()}},
					{{App\Donor::NotInterested()}},
	
						
					],
					backgroundColor: [
					"#808080","#029B2A","#EEF10E","#E91010"
					]
				}],
				labels: [
					'ן מענה  ',
					'רם! ',
					'ין מענה',
					'לא מעוניין '
				]
			},
			options: {
				responsive: true,
				legend: {
            display: true,
            position:'right'
        }
			}
		};

		window.onload = function() {
			var ctx = document.getElementById('chart-area').getContext('2d');
			window.myPie = new Chart(ctx, config);
		};
	</script>

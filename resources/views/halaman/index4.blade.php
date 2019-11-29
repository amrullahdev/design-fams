@extends('layouts.app')
@section('content')
 <div class="bg-blue4 text-light  py-4" style="height: 100%">
 	<div class="p-2 text-center " id="sidebar">
 		<div class="header fm2 h4 ">
 			Fams Design
 		</div>

 		<div class="body-side" >
 			<div class="item-side">
 				<a href="" data-toggle="tooltip" data-placement="right" title="Your Dashboard">
 					<i class="fa fa-home p-08 border-purple text-secondary2" ></i>
 				</a>

 			</div>
 			<div class="item-side">
 				 <a href="" data-toggle="tooltip" data-placement="right" title="Wanna Search Something?">
 				 	<i class="fa fa-search p-08 border-purple text-secondary2"></i>
 				 </a>
 			</div>
 			<div class="item-side">
 				<a href="" data-toggle="tooltip" data-placement="right" title="Config Your App !">
 					<i class="fa fa-cog p-08 border-purple text-secondary2"></i>
 				</a>
 			</div>
 			<div class="item-side">
 				<a href="" data-toggle="tooltip" data-placement="right" title="Seems Like Waiting Something ?">
 					<i class="fa fa-bell p-08 border-purple text-secondary2"></i>
 				</a>
 			</div>
 			<div class="item-side-user">
 				<a href="">
 					<i class="fa fa-user p-08 rounded-circle text-light" style="background: #ad7efe"></i>
 				</a>
 			</div>
 		</div>
 	</div>

 	{{-- content --}}
	 <div class=" text-dark  bgg-cyan p-2" id="content" style=" ">
 		<div class="row m-1" >
 			<div class="col-lg bg-cyan" id="left-colom" style="">
 				<div class="p-3">
 					<h3 class="fm1">Hello , <b>Fahmi Amrullah !</b>
 					</h3>
 					<span class=" text-white rounded float-right h5  rounded-circle p-08  ml-2 bg-blue4  d-lg-none "  id="sidebarTrigger" style="cursor:pointer; position: fixed; bottom: 5px; left: 30px; z-index: 1;	  "></span>	
 					

 					<ul class=" mt-4" >
 						<li>Dummy Navbar</li>
 						<li>Text Thing</li>
 						<li>Another item</li>
 						<li>Last Category</li>
 					</ul>
 					<div class="row" id="box-data">
 						<div class="col">
 							<div class="p-2 text-light rounded" style="background: #6115cb">
	 							<i class="fa fa-user mr-2 text-right"></i> <br>
	 							<div class="text-center h3">128</div>
	 							<div>User Online</div>
 							</div>
 						</div>
 						<div class="col">
 							<div class="p-2 text-light rounded" style="background: #428d9e">
	 							<i class="fa fa-rocket mr-2 text-right"></i> <br>
	 							<div class="text-center h3">440</div>
	 							<div>User Online</div>
 							</div>
 						</div>
 						<div class="col">
 							<div class="p-2 text-light rounded" style="background:#c5a3e2">
	 							<i class="fa fa-cubes mr-2 text-right"></i> <br>
	 							<div class="text-center h3">340</div>
	 							<div>User Online</div>
 							</div>
 						</div>
 						<div class="col">
 							<div class="p-2 text-light rounded" style="background:#399bb1">
	 							<i class="fa fa-cubes mr-2 text-right"></i> <br>
	 							<div class="text-center h3">340</div>
	 							<div>User Online</div>
 							</div>
 						</div>
 					</div>
 					<div class="row">
 						<div class="col-sm">
 							<div class="mt-5" id="schedule">
		 						<div class="font-weight-bolder h4 fm1 " >Schedule</div>
		 						<ul class=" mt-2" >
			 						<li>Week </li>
			 						<li>Month </li>
			 						<li>Year </li>
			 					</ul>
		 						<div id="chartContainer" style="height:150px; width: 100%; box-shadow: 1px 1px 10px #b8ddca"></div>
		 					</div>
 						</div>
 						<div class="col-sm">
 							<div class="col-sm">
	 							<div class="mt-5" id="Latest Data">
			 						<div class="font-weight-bolder h4 fm1 " >Latest Data</div>
			 						<ul class=" mt-2" >
				 						<li>User </li>
				 						<li class="text-purple">Inventory </li>
				 						<li>Consumer </li>
				 					</ul>
									<div class="row text-center" id="box-latest">
										<div class="col ">
											<div class=" rounded bg-light text-center">
												<img src="{{url('gambar/index3/1.jpeg')}}" alt="" class="w-75" style="box-shadow: 1px 1px 10px #b8ddca">
												<p class="text-left pl-2 py-3">
													<b>Dummy bag</b> <i class="fa fa-circle text-purple ml-4"></i>
													<span class="text-secondary2">Input At : 12:00 Pm</span>
												</p>
											</div>
										</div>
										<div class="col">
											<div class=" rounded bg-light text-center">
												<img src="{{url('gambar/index3/2.jpeg')}}" alt="" class="w-75" style="box-shadow: 1px 1px 10px #b8ddca">
												<p class="text-left pl-2 py-3">
													<b>Dummy bag</b> <i class="fa fa-circle text-purple ml-4"></i>
													<span class="text-secondary2">Input At : 12:00 Pm</span>
												</p>
											</div>
										</div>
									</div>
			 					</div>
 							</div>
 						</div>
 					</div>
 					
 				</div>
 			</div>
 			<div class="col-lg-4">
 				<div class="p-3"  id="right-colom" style="">
 					<div class="text-center">
 						<span class="h4 font-weight-bolder ">Your Profile</span>
 						<div class="mt-3">
 							<div class="row">
 								<div class="col-sm-3" style="align-self: center">
 									<i class="fa fa-user rounded-circle bg-light  p-4 fa-2x text-purple" style="box-shadow: inset 1px 1px 10px #b8ddca;"></i>	
 								</div>
 								<div class="col-sm">
 									<table class="table table-sm bordered m-1 text-left">
 										<tr>
 											<th>Name</th>
 											<td>Fahmi Amrullah</td>
 										</tr>
 										<tr>
 											<th>Date</th>
 											<td>Jakarta 10/11/1954</td>
 										</tr>
 										<tr>
 											<th>Status</th>
 											<td>Admin</td>
 										</tr>
 									</table>
 								</div>
 							</div>
 						</div>
 					</div>
 				</div>
 				<div class="p-3"  style=" box-shadow: 1px 1px 10px #b8ddca">
 					<div class="h4 mb-3	 text-left font-weight-bold">
 						Personal Note <i class="fa fa-pencil p-1 text-purple float-right"></i>
 					</div>
 					<div class="p-2 rounded">
 						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo ducimus nemo repellat atque quibusdam eum dolorum provident illum veritatis Lorem ipsum dolor..
 					</div>
 				</div>
 				<div class="p-3 bg-blue4" id="history" style="">
 					<div class="text-center h4 text-white font-weight-bold">
 						History
 					</div>
 					<div class="p-2  text-secondary2">
 						<i class="fa fa-user text-purple mr-2 p-2 rounded-circle bg-light"></i>
 						Tia Andrian , 
 						Has add new <b>item</b> at 12:00 Pm
 					</div>
 					<div class="p-2  text-secondary2">
 						<i class="fa fa-user text-purple mr-2 p-2 rounded-circle bg-light"></i>
 						Tia Andrian , 
 						Has add new <b>item</b> at 12:00 Pm
 					</div>
 					<div class="p-2  text-secondary2">
 						<i class="fa fa-user text-purple mr-2 p-2 rounded-circle bg-light"></i>
 						Tia Andrian , 
 						Has add new <b>item</b> at 12:00 Pm
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>
 <script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	backgroundColor: "#F5DEB300",
	legend:{
		cursor:"pointer",
		itemclick: toggleDataSeries
	},
	data: [{        
		type: "spline",  
		name: "US",        
		showInLegend: false,
		dataPoints: [
			{ label: "Week 1" , y: 44 },     
			{ label:"Week 2", y: 37 },     
			{ label: "Week 3", y: 36 },     
			{ label: "Week 4", y: 36 },     
			{ label: "Week 4", y: 46 },
			{ label: "Week 6", y: 46 }
		]
	}, 
	{        
		type: "spline",
		name: "China",        
		showInLegend: false,
		dataPoints: [
			{ label: "Week 1" , y: 16 },     
			{ label:"Week 2", y: 28 },     
			{ label: "Week 3", y: 32 },     
			{ label: "Week 4", y: 48 },     
			{ label: "Week 4", y: 38 },
			{ label: "Week 6", y: 26 }
		]
	},
	{        
		type: "spline",  
		name: "Britain",        
		showInLegend: false,
		dataPoints: [
			{ label: "Week 1" , y: 1 },     
			{ label:"Week 2", y: 11 },     
			{ label: "Week 3", y: 9 },     
			{ label: "Week 4", y: 19 },     
			{ label: "Week 4", y: 29 },
			{ label: "Week 6", y: 27 }
		]
	},
	{        
		type: "spline",  
		name: "Russia",        
		showInLegend: false,
		dataPoints: [
			{ label: "Week 1" , y: 26 },     
			{ label:"Week 2", y: 32 },     
			{ label: "Week 3", y: 28 },     
			{ label: "Week 4", y: 22 },     
			{ label: "Week 4", y: 20 },
			{ label: "Week 6", y: 19 }
		]
	},
	{        
		type: "spline",  
		name: "S Korea",        
		showInLegend: false,
		dataPoints: [
			{ label: "Week 1" , y: 7 },     
			{ label:"Week 2", y: 8 },     
			{ label: "Week 3", y: 9 },     
			{ label: "Week 4", y: 13 },     
			{ label: "Week 4", y: 13 },
			{ label: "Week 6", y: 9 }
		]
	},  
	{        
		type: "spline",  
		name: "Germany",        
		showInLegend: false,
		dataPoints: [
			{ label: "Week 1" , y: 20 },     
			{ label:"Week 2", y: 13 },     
			{ label: "Week 3", y: 13 },     
			{ label: "Week 4", y: 16 },     
			{ label: "Week 4", y: 11 },
			{ label: "Week 6", y: 17 }
		]
	}]
});

chart.render();

function toggleDataSeries(e) {
	if(typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else {
		e.dataSeries.visible = true;            
	}
	chart.render();
}

}
</script>
 <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
@endsection
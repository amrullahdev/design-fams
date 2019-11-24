@extends('layouts.app')
@section('content')


<div class="bg-white">
	<div class="container-fluid">
			<i class=" rounded-circle p-2 text-light fa fa-align-left" id="sideTrigger"></i>
		<div class="row">
			{{-- Left --}}
			<div class=" p-3 text-light bgt-dblue" id="right" style="height: 100vh;">
				<h4 class="fm2 text-center">Fams Design</h4>
				<ul class="list-group py-3">
					<span class="border-top mb-3 border-secondary"></span>
					<li class="list-group-item bgt-dblue  mb-4" style="padding: 3px">
						<i class="fa fa-tachometer mr-2"></i>Dashboard
					</li>

					{{-- UI ELEMENT --}}
					<div class="mb-3">
						<div class="font-weight-bold">UI ELEMENTS</div>
						<div class="border-top mb-2 border-secondary"></div>

						<a class="text-light card-link sss" href="#components" data-toggle="collapse" >
							<li class="list-group-item mt-2 bgt-dblue tdn " style="padding: 3px;">
								<i class="fa fa-coffee mr-2"></i>Components
								<span class="float-right"><i class="fa fa-angle-right"></i></span>
							</li>
						</a>
						<div class="collapse" id="components">
							<li class="list-group-item bgt-dblue ">
								Content 1
							</li>
							<li class="list-group-item bgt-dblue ">
								Content 2
							</li>
							<li class="list-group-item bgt-dblue ">
								Content 3
							</li>
						</div>

						<li class="list-group-item mt-2 bgt-dblue" style="padding: 3px">
							<i class="fa fa-table mr-2"></i>Tables
							<span class="float-right"><i class="fa fa-angle-right"></i></span>
						</li>
						<li class="list-group-item mt-2 bgt-dblue" style="padding: 3px">
							<i class="fa fa-th mr-2"></i>Forms
							<span class="float-right"><i class="fa fa-angle-right"></i></span>
						</li>
					</div>

					<div class="ICONS">
						<div class="font-weight-bold">ICONS</div>
						<div class="border-bottom border-secondary mb-2"></div>

						<li class="list-group-item mt-2 bgt-dblue" style="padding:3px">
							<a href="" class="card-link text-light"><i class="fa fa-tasks mr-2"></i>Icon</a>
						</li>
						<li class="list-group-item mt-2 bgt-dblue" style="padding:3px">
							<a href="" class="card-link text-light"><i class="fa fa-money mr-2"></i>Money</a>
						</li>	
						<li class="list-group-item mt-2 bgt-dblue" style="padding:3px">
							<a href="" class="card-link text-light"><i class="fa fa-bar-chart mr-2"></i>Money</a>
						</li>
						<li class="list-group-item mt-2 bgt-dblue" style="padding:3px">
							<a href="" class="card-link text-light"><i class="fa fa-map mr-2"></i>Maps</a>
						</li>
					</div>
				</ul>
			</div>
			<div class="col" id="content">
				<div class="p-3 ">
					{{-- Navbar --}}
					<div class="row  mb-3">
						<div class="col">
							<i class="fa fa-search mr-3 "></i>
							<i class="fa fa-bell mr-3"></i>
							<i class="fa fa-envelope-o mr-3"></i>	
						</div>
						<div class="col text-right">
							<i class="fa fa-user "></i>
						</div>
					</div>
					<div class="border-bottom" style="box-shadow: 0px 10px 8px black"></div>
					{{-- Title --}}
					<div class="py-3">
						<h5 class="font-weight-bold">Dashboard</h5>
					</div>

					{{-- Content --}}
					<div class="bg-light" >
						<div class="row">
							<div class="col-sm m-2">
								<div class=" text-light p-3 rounded" style="background: #99C7C8">
									<div class="row">
										<div class="col-sm">
											<div  class="h5"> 
											1423 <br>Members Online
										 	</div>	
										</div>
										<div class="col-sm text-right">
											<i class="fa fa-cog fa-2x"></i>
										</div>
									</div>
								</div>	
							</div>
							<div class="col-sm m-2">
								<div class=" text-light p-3 rounded" style="background: #AFDDDF">
									<div class="row">
										<div class="col-sm">
											<div  class="h5"> 
											1423 <br>Members Online
										 	</div>	
										</div>
										<div class="col-sm text-right">
											<i class="fa fa-cog fa-2x"></i>
										</div>
									</div>
								</div>	
							</div>
							<div class="col-sm m-2">
								<div class=" text-light p-3 rounded" style="background: #457B9D">
									<div class="row">
										<div class="col-sm">
											<div  class="h5"> 
											1423 <br>Members Online
										 	</div>	
										</div>
										<div class="col-sm text-right">
											<i class="fa fa-cog fa-2x"></i>
										</div>
									</div>
								</div>	
							</div>
							<div class="col-sm m-2">
								<div class=" text-light p-3 rounded" style="background: #E63946">
									<div class="row">
										<div class="col-sm">
											<div  class="h5"> 
											1423 <br>Members Online
										 	</div>	
										</div>
										<div class="col-sm text-right">
											<i class="fa fa-cog fa-2x"></i>
										</div>
									</div>
								</div>	
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
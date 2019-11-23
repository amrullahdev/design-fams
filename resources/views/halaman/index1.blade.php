@extends('layouts.app')
@section('content')
	<nav class="navbar navbar-expand-lg " style="background: #D5CAD6">
		<a class="navbar-brand fm1 text-light font-weight-bold" style="text-shadow: 1px 1px 10px #D5CAD6" >
			Fams Design
		</a>
		<button class="navbar-toggler" data-toggle="collapse" data-target="#navbar">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-md-center" id="navbar">
			<ul class="navbar-nav mr-auto"></ul>
			<ul class="navbar-nav mr-auto"></ul>
			<ul class="navbar-nav mr-auto">
				<li class="navbar-item mr-auto">
					<div class="nav-link">
						<i class="fa fa-phone text-light mr-2"></i>
						<span class="text-light">0897-7881-1223</span>
					</div>
				</li>
				<li class="navbar-item mr-auto">
				<div class="nav-link">
						<i class="fa fa-instagram text-light mr-2"></i>
						<span class="text-light">Dummy_instagram</span>
					</div>
				</li>
			</ul>
			{{-- Right Navbahr --}}
			<ul class="navbar-nav mr-auto" >
				<li class="nav-item mr-5" >
					<a href="" class="nav-link  text-light" style="text-shadow: 1px 1px 1px #D5CAD6;">
						<i class="fa fa-home mr-2"></i>Home</a>
				</li>
				<li class="navbar-nav mr-5">
					<a href="" class="nav-link text-light" style="text-shadow: 1px 1px 1px #D5CAD6;">
						<i class="fa fa-cube mr-2"></i>Product</a>
				</li>
				<li class="navbar-nav mr-5">
					<a href="" class="nav-link text-light" style="text-shadow: 1px 1px 1px #D5CAD6;">
						<i class="fa fa-user mr-2"></i>Contact us</a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="container-fluid ">
		<div class="row ">
			<div class="col-sm" >
				<div class="row bgg-primary2 text-center ">
					<div class="col-sm animated fadeInDown" style="animation-delay: 1s">
						<img src="{{url('gambar/index1/g1.png')}}" alt="Photo by Massimiliano Morosinotto on Unsplash" class="w-50"  style="filter: drop-shadow(3px 5px 3px #D5CAD6);">
					</div>
				</div>
				<div class="row">
					<div class="col-sm">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#CDEDF6" fill-opacity="1" d="M0,288L0,160L288,160L288,256L576,256L576,256L864,256L864,96L1152,96L1152,128L1440,128L1440,0L1152,0L1152,0L864,0L864,0L576,0L576,0L288,0L288,0L0,0L0,0Z"></path></svg>
					</div>
				</div>
			</div>
			<div class="col-sm">
				<div class="row bgg-primary2">
					<div class="col-sm p-5" style=" margin: 50px auto;">
						<h1 class="fm2 text-capitalize text-center font-weight-bold text-light animated fadeInUp" style="font-size: 50px; text-shadow: 1px 1px 1px #D5CAD6" >Make your own <br>dream building  <br>Today !</h1>
						<div class="row py-4 ">
							<div class="col-sm  m-2">
								<button class="btn btn-primary btn-block animated fadeIn" style="background:#D5CAD6 ; border: none; animation-delay: 0.6s">
									<i class="fa fa-tag mr-2"></i>Pricing</button>	
							</div>
							<div class="col-sm  m-2">
								<button class="btn btn-primary btn-block animated fadeIn" style="background: #AEA7A9; border: none; animation-delay: 0.6s">About Us</button>	
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#CDEDF6" fill-opacity="1" d="M0,288L0,160L288,160L288,256L576,256L576,256L864,256L864,96L1152,96L1152,128L1440,128L1440,0L1152,0L1152,0L864,0L864,0L576,0L576,0L288,0L288,0L0,0L0,0Z"></path></svg>
					</div>			
				</div>
			</div>

		</div>
	</div>


<div class="w-50">
	<div class="bgg-primary2 animated slideInLeft" 
		style="position: absolute;bottom:200px;left:0em;background: #D5CAD6;width: 30px;height: 250px;border-top-right-radius: 100px;border-bottom-right-radius: 90px">
	</div>
	<div class="p-2 rounded-circle text-white animated slideInLeft" id="buttonHome">
		<i class="fa fa-home fa-2x" id="iconHome"></i>
	</div>
	<div id="isiButtonHome">
		<div class="p-1 pl-3 rounded-circle text-white icon-home icon-ig animated bounceIn" style="position: absolute;bottom: 350px; left: 40px; background: #D5CAD6;	">
			<i class="fa fa-instagram fa-2x"></i>
			<span id="ig"></span>
		</div>
		<div class="p-1 pl-3 rounded-circle text-white icon-home icon-phone animated bounceIn" style="position: absolute;bottom: 300px; left: 75px; background: #D5CAD6;">
			<i class="fa fa-phone fa-2x"></i>
			<span id="phone"></span>
		</div>
		<div class=" pl-3 p-1 rounded-circle text-white icon-home icon-user animated bounceIn" style="position: absolute;bottom: 250px; left: 40px; background: #D5CAD6;">
			<i class="fa fa-user fa-2x"></i>
			<span id="user"></span>
		</div>
	</div>
</div>

@endsection
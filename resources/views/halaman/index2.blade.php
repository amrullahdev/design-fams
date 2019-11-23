@extends('layouts.app')
@section('content')


<div class="bg-white">
	<div class="container py-4 ">
		{{-- navbar --}}
		<div class="row">
			<div class="col-sm m-2">
				<h4 class="fm2">Fams Design</h4>
			</div>
			<div class="col-sm m-2">
				<p ><i class="fa fa-th mr-2 text-blue"></i>Category</p>
			</div>
			<div class="col-sm-5">
				<div class="form-group">
					<div class="input-group" >
						<span class="input-group-prepend p-2  bg-white border border-right-0" style="border-top-left-radius: 100px">
							<i class="fa fa-search ml-2 mt-1  text-secondary" ></i>
						</span>
						<input type="text" class=" form-control border-left-0" style="border-bottom-right-radius: 100px"  placeholder="Search What You Looking For ">
					</div>
				</div>
			</div>
			<div class="col-sm  m-2 ">
				<p ><i class="fa fa-comments mr-2 text-blue"></i>Contact</p>
			</div>
			<div class="col-sm  m-2 ">
				<p ><i class="fa fa-question mr-2 text-blue"></i>Help</p>
			</div>
		</div>
		{{-- // --}}
		
		{{-- Jumbtron --}}
		<div class="bg-blue p-5 rounded-pill mt-4">
			<div class="row">
				<div class="col-sm" style="margin:10px auto;">
					<div class="fm1 h2">
						<span class="font-weight-bold">The Greatest Hits  </span><br>
						Off All Time 
					</div>
					<div class="form-group py-3">
						<div class="input-group" >
							<span class="input-group-prepend p-2  bg-white border border-right-0" style="border-top-left-radius: 100px">
								<i class="fa fa-search ml-2 mt-1  text-secondary" ></i>
							</span>
							<input type="text" class=" form-control border-left-0" style="border-bottom-right-radius: 100px"  placeholder="Search What You Looking For ">
						</div>
					</div>	
				</div>
				<div class="col-sm">
					<img src="{{url('gambar/index2/svg1.svg')}}" alt="" class="w-75" style="position: absolute; right: 10px">
				</div>
			</div>
		</div>

		{{-- Kategori --}}
		<div class="" style="margin-top:4em ">
			<h5 class="font-weight-bold m-4">Categories</h5>
			<div class="row text-center">
				<div class="col-sm">
					<div class="bg-light p-3 rounded-pill">
						<i class="fa fa-cube fa-2x"></i> <br>
						Lorem ipsum <br> dolor sit amet,
					</div>
				</div>
				<div class="col-sm">
					<div class="bg-light p-3 rounded-pill">
						<i class="fa fa-rocket fa-2x"></i> <br>
						Lorem ipsum <br> dolor sit amet,
					</div>
				</div>
				<div class="col-sm">
					<div class="bg-light p-3 rounded-pill">
						<i class="fa fa-thumbs-up fa-2x"></i> <br>
						Lorem ipsum <br> dolor sit amet,
					</div>
				</div>
				
				<div class="col-sm">
					<div class="bg-light p-3 rounded-pill">
						<i class="fa fa-database fa-2x"></i> <br>
						Lorem ipsum <br> dolor sit amet,
					</div>
				</div>
				<div class="col-sm">
					<div class="bg-light p-3 rounded-pill">
						<i class="fa fa-tty fa-2x"></i> <br>
						Lorem ipsum <br> dolor sit amet,
					</div>
				</div>
				<div class="col-sm">
					<div class="bg-light p-3 rounded-pill">
						<i class="fa fa-diamond fa-2x"></i> <br>
						Lorem ipsum <br> dolor sit amet,
					</div>
				</div>
			</div>
		</div>

		{{-- Featured Album --}}
		<div class="mt-5">
			<h5 class="font-weight-bold m-4">Featured Album</h5>
			<div class="row">
				<div class="col-sm text-center">
					<div class="p-3 rounded " style="background:#AFCFDC">
						<img src="{{url('gambar/index2/1.jpeg')}}" alt="" class="w-75 text-center">
					</div>
					<div class="mt-2 font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus?.</div>
				</div>
				<div class="col-sm text-center">
					<div class="p-3 rounded " style="background:#CBE8E3 ">
						<img src="{{url('gambar/index2/2.jpeg')}}" alt="" class="w-75 text-center">
					</div>
					<div class="mt-2 font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus?.</div>
				</div>
				<div class="col-sm text-center">
					<div class="p-3 rounded " style="background:#E3F1E7 ">
						<img src="{{url('gambar/index2/3.jpeg')}}" alt="" class="w-75 text-center">
					</div>
					<div class="mt-2 font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus?.</div>
				</div>
				<div class="col-sm text-center">
					<div class="p-3 rounded " style="background:#FFAAC0 ">
						<img src="{{url('gambar/index2/4.jpeg')}}" alt="" class="w-75 text-center">
					</div>
					<div class="mt-2 font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus?.</div>
				</div>
			</div>
		</div>

		{{-- Why Trust --}}
		<div class=" mb-5" style="margin-top: 6em">
			<div class="row">
				<div class="col-sm">
					<h4 class="m-1">Why Trust <br> <span class="font-weight-bolder">Consumer <br> Voice ? </span></h4>
					<button class="btn mt-2" style="background: #F3FFBD">Learn More</button>
				</div>
				<div class="col-sm text-center">
					<i class="fa fa-search fa-2x"></i> 
					<div class="mt-3">
						<h5 class="font-weight-bold">Research</h5>
						<p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing </p>
					</div>
				</div>
				<div class="col-sm text-center">
					<i class="fa fa-comments fa-2x"></i> 
					<div class="mt-3">
						<h5 class="font-weight-bold">Research</h5>
						<p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing </p>
					</div>
				</div>
				<div class="col-sm text-center">
					<i class="fa fa-star fa-2x"></i> 
					<div class="mt-3">
						<h5 class="font-weight-bold">Research</h5>
						<p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing </p>
					</div>
				</div>
			</div>
		</div>
		<div class="text-center fm2  mb-5">
			<h4 class="text-secondary mt-5">Fams Design</h4>
		</div>
	</div>
</div>
@endsection
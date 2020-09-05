@extends('master')
@section('content')
<div class="jumbotron jumbotron-fluid subtitle">
  		<div class="container">
    		<h1 class="text-center text-white"> Code Number: {{$items->codeno}} </h1>
  		</div>
	</div>
	
	<!-- Content -->
	<div class="container">

		<!-- Breadcrumb -->
		<nav aria-label="breadcrumb ">
		  	<ol class="breadcrumb bg-transparent">
		    	<li class="breadcrumb-item">
		    		<a href="{{route('homepage')}}" class="text-decoration-none secondarycolor"> Home </a>
		    	</li>
		    	<li class="breadcrumb-item">
		    		<a href="{{route('categorypage',$items->subcategory->category->id)}}" class="text-decoration-none secondarycolor"> {{$items->subcategory->category->name}}</a>
		    	</li>
		    	<li class="breadcrumb-item">
		    		<a href="{{route('subcategorypage',$items->subcategory->id)}}" class="text-decoration-none secondarycolor">{{$items->subcategory->name}}</a>
		    	</li>
		    	<li class="breadcrumb-item active" aria-current="page">
					{{$items->name}}
		    	</li>
		  	</ol>
		</nav>

		<div class="row mt-5">
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
				<img src="{{asset($items->photo)}}" class="img-fluid">
			</div>	


			<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
				
				<h4> {{$items->name}} </h4>

				<div class="star-rating">
					<ul class="list-inline">
						<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
						<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
						<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
						<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
						<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
					</ul>
				</div>

				<p>
					{{$items->description}}
				</p>

				<p> 
					<span class="text-uppercase "> Discount Price : </span>
					@php $discount=$items->price-($items->price*($items->discount/100)) @endphp
					 <span class="d-block">Ks{{number_format($discount)}}</span>
				</p>
				<p> 
					<span class="text-uppercase "> Price : </span>
					
					 <span class="maincolor ml-3 font-weight-bolder"><del>{{number_format($items->price)}}Ks</del> <small>-{{$items->discount}}%</small></span>
				</p>


				<p> 
					<span class="text-uppercase "> Brand : </span>
					<span class="ml-3"> <a href="{{route('brandpage',$items->brand->id)}}" class="text-decoration-none text-muted">{{$items->brand->name}}</a> </span>
				</p>


				<button class="addtocartBtn text-decoration-none add_to_cart"   data-id="{{$items->id}}"
				                data-name="{{$items->name}}"
								data-price="{{$items->price}}"
								data-photo="{{$items->photo}}"
								data-discount="{{$items->discount}}"
								data-codeno="{{$items->codeno}}" >
					Add to Cart
				</button>
				
			</div>
		</div>

		<div class="row mt-5">
			<div class="col-12">
				<h3> Related Item </h3>
				<hr>
			</div>
			

			<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
				<a href="">
					<img src="{{asset('main/image/item/saisai_two.jpg')}}" class="img-fluid">
				</a>
			</div>

			<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
				<a href="">
					<img src="{{asset('main/image/item/saisai_three.jpg')}}" class="img-fluid">
				</a>
			</div>

			<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
				<a href="">
					<img src="{{asset('main/image/item/saisai_four.jpg')}}" class="img-fluid">
				</a>
			</div>

			<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
				<a href="">
					<img src="{{asset('main/image/item/saisai_four.jpg')}}" class="img-fluid">
				</a>
			</div>
		</div>

		
	</div>
	@endsection
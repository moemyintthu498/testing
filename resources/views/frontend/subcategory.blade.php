@extends('master')
@section('content')

<!-- Subcategory Title -->
<div class="jumbotron jumbotron-fluid subtitle">
	<div class="container">
		<h1 class="text-center text-white"> {{$subcategories->name}} </h1>
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
				<a href="{{route('categorypage',$subcategories->category->id)}}" class="text-decoration-none secondarycolor">{{$subcategories->category->name}}</a>
			</li>
			<li class="breadcrumb-item">
				<a href="#" class="text-decoration-none secondarycolor"> {{$subcategories->name}} </a>
			</li>
			
		</ol>
	</nav>

	<div class="row mt-5">
		<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
			<ul class="list-group">
				@foreach($subcategories->category->subcategories as $sidesubcategory)
				<li class="list-group-item">
					<a href="{{route('subcategorypage',$subcategories->id)}}" class="text-decoration-none secondarycolor"> {{$sidesubcategory->name}}</a>
				</li>
				@endforeach
				
			</ul>
		</div>	


		<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">

			<div class="row">
				@if(count($subcategories->items)>0)
				@foreach($subcategories->items as $item)
				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
					<div class="card pad15 mb-3">
						<a href="route('itemdetailpage',$item->id)">
							<img src="{{asset($item->photo)}}" class="card-img-top" alt="...">
							
							<div class="card-body text-center">
								<h5 class="card-title text-truncate">{{$item->name}}</h5>
								
								<p class="item-price">
									@php $discount=$item->price-($item->price*($item->discount/100)) @endphp
									<span class="d-block">Ks{{number_format($discount)}}</span> 
									<small><strike class="mr-2">{{number_format($item->price)}}Ks</strike> -{{$item->discount}}%</small>
								</p>

								<div class="star-rating">
									<ul class="list-inline">
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
									</ul>
								</div>
							</div>
						</a>

						<a href="#" class="addtocartBtn text-decoration-none add_to_cart" data-id="{{$item->id}}"
							data-name="{{$item->name}}"
							data-price="{{$item->price}}"
							data-photo="{{$item->photo}}"
							data-discount="{{$item->discount}}"
							data-codeno="{{$item->codeno}}">Add to Cart</a>
							
						</div>
					</div>
					@endforeach
					@else
					<div class="col-12">
						There are no item!
					</div>
					@endif

				</div>
				
				<div class="row">
					<div class="col-md-12 justify-content-center">
						{{!! $subcategories->items->render()!!}}
					</div>
				</div>


				
			</div>
		</div>

		
	</div>
	@endsection
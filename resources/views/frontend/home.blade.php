@extends('master')
@section('content')
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  		<ol class="carousel-indicators">
    		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  		</ol>
  		
  		<div class="carousel-inner">
    		<div class="carousel-item active">
		      	<img src="{{asset('main/image/banner/ac.jpg')}}" class="d-block w-100 bannerImg" alt="...">
		    </div>
		    <div class="carousel-item">
		      	<img src="{{asset('main/image/banner/giordano.jpg')}}" class="d-block w-100 bannerImg" alt="...">
		    </div>
		    <div class="carousel-item">
		      	<img src="{{asset('main/image/banner/garnier.jpg')}}" class="d-block w-100 bannerImg" alt="...">
		    </div>
  		</div>
	</div>


	<!-- Content -->
	<div class="container mt-5 px-5">
		<!-- Category -->
		<div class="row">
			@foreach($categories as $category)
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 ">
				<div class="card categoryCard border-0 shadow-sm p-3 mb-5 rounded text-center">
				  	<img src="{{asset($category->photo)}}" class="card-img-top" alt="...">
				  	<div class="card-body">
				    	<p class="card-text font-weight-bold text-truncate"> {{$category->name}}</p>
				  	</div>
				</div>
			</div>
			@endforeach

			
		</div>

		<div class="whitespace d-xl-block d-lg-block d-md-none d-sm-none d-none"></div>
		
		<!-- Discount Item -->
		<div class="row mt-5">
			<h1> All Item </h1>
		</div>

	    <!-- Disocunt Item -->
		<div class="row">
			
			<div class="col-12">
				<div class="MultiCarousel" data-items="1,3,5,7" data-slide="1" id="MultiCarousel"  data-interval="1000">
					
		            <div class="MultiCarousel-inner">
		            	@foreach($discountItems as $item)
		                <div class="item">
		                	<a href="{{route('itemdetailpage',$item->id)}}">
		                    <div class="pad15">
		                    	
		                    	<img src="{{$item->photo}}" class="img-fluid">
		                    	
		                        <p class="text-truncate">{{$item->name}}</p>
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
		                <button class="btn btn-info add_to_cart"
								data-id="{{$item->id}}"
								data-name="{{$item->name}}"
								data-price="{{$item->price}}"
								data-photo="{{$item->photo}}"
								data-discount="{{$item->discount}}"
								data-codeno="{{$item->codeno}}">	Add To Cart

								</button>
								
		                </div>

		               @endforeach
		            
		            <button class="btn btnMain leftLst"><</button>
		            <button class="btn btnMain rightLst">></button>
		        </div>
		    </div>
		    </div>
		</div>

		<!-- Flash Sale Item -->
		

		
		<div class="whitespace d-xl-block d-lg-block d-md-none d-sm-none d-none"></div>

	    <!-- Brand Store -->
	    <div class="row mt-5">
			<h1> Top Brand Stores </h1>
	    </div>

	    <!-- Brand Store Item -->
	    <section class="customer-logos slider mt-5">
		   @foreach($brands as $brand)

	      	<div class="slide">
	      		<a href="{{route('brandpage',$brand->id)}}">

		      		<img src="{{asset($brand->photo)}}">
		      	</a>
	      	</div>
	      	@endforeach
	      	
	      	
	   	</section>

	    <div class="whitespace d-xl-block d-lg-block d-md-none d-sm-none d-none"></div>

	</div>
	@endsection
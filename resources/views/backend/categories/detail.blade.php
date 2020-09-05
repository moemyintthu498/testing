@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="row mb-5">
		<div class="col-md-12">
			<h1 class="h3 mb-0 text-gray-800 d-inline-block">Category Detail Page</h1>
		</div>
	</div>
	<div class="row">
		{{-- <div class="col-md-4">
			<img src="{{asset($subcategory->items->photo)}}" class="img-fluid">
		</div> --}}
		<div class="col-md-8">
			<div class="col-md-4">
			   <img src="{{asset($category->photo)}}" class="img-fluid">
		   </div>
		   <div class="col-md-8">
			   <p>{{$category->name}}</p>
			
			

		    </div>
			

		</div>
		
	</div>
</div>



@endsection
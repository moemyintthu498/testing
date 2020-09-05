@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="row mb-5">
		<div class="col-md-12">
			<h1 class="h3 mb-0 text-gray-800 d-inline-block">Items Detail Page</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<img src="{{asset($item->photo)}}" class="img-fluid">
		</div>
		<div class="col-md-8">
			<p>{{$item->name}}</p>
			<p>{{$item->codeno}}</p>
			<p>{{$item->price}}</p>
			<p>{{$item->discount}}</p>
			<p>{{$item->subcategory->name}}</p>
			

		</div>
		<div class="col-md-12 my-4">
			<h4>Description:</h4>
		
		<p>{{$item->description}}</p>
	</div>
</div>
</div>


@endsection
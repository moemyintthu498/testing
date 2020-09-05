@extends('backendtemplate')
@section('content')
<div class="container">
	<div class="d-sm-flex align-items-center justify-content-between">
		<h1 class="h3 mb-0 text-gray-800 ">Brand List</h1>

		<a href="{{route('brands.create')}}" class="btn btn-info ">Add New</a>
	</div>
</div>


<div class="container">
	

	<div class="row">

		<div class="col-md-12">

			<table class="table table-bordered">
				<thead class="bg-dark text-white">
					<tr>
						<th>No</th>
						<th>Brand Name</th>
						
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					@php $i=1; @endphp
					@foreach ($brands as $brand)
					<tr>
						<td>{{$i++}}</td>
						<td>{{$brand->name}}</td>
						
						<td>
							<a href="{{route('brands.show',$brand->id)}}" class="btn btn-info">Detail</a>
							<a href="{{route('brands.edit',$brand->id)}}" class="btn btn-warning">Edit</a>
							<form method="post" action="{{route('brands.destroy',$brand->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
								@csrf
								@method('DELETE')
								<input type="submit" class="btn btn-danger" value="Delete">
							</form>
						</td>
					</tr>
					@endforeach
					

				</tbody>
			</table>
		</div>
	</div>
</div>


@endsection
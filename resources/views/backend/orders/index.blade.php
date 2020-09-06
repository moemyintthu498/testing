@extends('backendtemplate')
@section('content')
<div class="container">
	<div class="d-sm-flex align-items-center justify-content-between">
		<div>
		<h1 class="h3 mb-0 text-gray-800 ">Order List</h1>
	</div>
        <form method="get" action="{{route('orders.index')}}" class="mx-2">
        	<div class="form-row">
        		<div class="col">
        			<input type="date" name="sdate" class="form-control" placeholder="Start Date">
        		</div>
        		<div class="col">
        			<input type="date" name="edate" class="form-control" placeholder="End Date">
        		</div>
        		<div class="col">
        			<input type="submit" class="btn btn-success" value="Search">
        		</div>

        	</div>
        </form>
		
	</div>
</div>


<div class="container">
	

	<div class="row">

		<div class="col-md-12">

			<table class="table table-bordered">
				<thead class="bg-dark text-white">
					<tr><th>No</th>
						<th>Voucher No</th>
						<th>Order Date</th>
						<th>User</th>
						
						<th>Total</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@php $i=1; @endphp
					@foreach ($orders as $order)
					<tr>
						<td>{{$i++}}</td>
						<td>{{$order->voucherno}}</td>
						<td>{{$order->orderdate}}</td>
						<td>{{$order->user->name}}</td>
						<td>{{$order->total}}MMK</td>
						<td>
							<a href="{{route('orders.show',$order->id)}}" class="btn btn-info" >Detail</a>
							
						</td>
					</tr>
					@endforeach
					

				</tbody>
			</table>
		</div>
	</div>
</div>


@endsection
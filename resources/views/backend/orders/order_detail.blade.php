@extends('backendtemplate')
@section('content')
<div class="container">
	<div class="d-sm-flex align-items-center justify-content-between">
		<h1 class="h3 mb-0 text-gray-800 ">Voucherno:{{$order->voucherno}}</h1>


	    
	</div>
	<h1 class="h3 mb-0 text-gray-800 ">orderDate:{{$order->orderdate}}</h1>

</div>

<div class="row">
      <div class="col-md-10">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No.</th>
              <th>Item Name</th>
             
              <th>Price</th>
              <td>Qty</td>
              <td>Subtotal</td>
            </tr>
          </thead>
          <tbody>
           
           @php

            $i=1; $total=0;
           @endphp
           @foreach ($order->items as $item)
           @php 
              $subtotal=$item->price*$item->pivot->qty;
              $total+=$subtotal;
              @endphp
					<tr>
						<td>{{$i++}}</td>
            <td>{{$item->name}}</td>
						<td>{{$item->price}}MMK</td>
            <td>{{$item->pivot->qty}}</td>
            <td>{{$subtotal}}</td>
					</tr>
					@endforeach
          <tr class="bg-dark text-white">
            <td colspan="4">Total:</td>
            <td>{{$total}}MMK</td>
          </tr>
              
          </tbody>
          
        </table>
      </div>
    </div>


@endsection
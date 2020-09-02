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
           {{--  @php 
              require 'admin/connection.php';
              $sql="SELECT p.product_name,p.product_photo,pod.product_price,pod.product_quantity  from products p inner join product_order_details pod on p.id=pod.product_id and pod.voucherid=:voucherid";
              $data=['voucherid'=>$voucherid];
              $stmt=$pdo->prepare($sql);
              $stmt->execute($data);
              $result=$stmt->fetchAll();
              // var_dump($result);
              $i=1;$total=0;
              @foreach ($result as $key => $product) {
                $product_name=$product['product_name'];
                $product_photo=$product['product_photo'];
                $product_price=$product['product_price'];
                $product_quantity=$product['product_quantity'];
                $subtotal=$product_price*$product_quantity;
                $total+=$subtotal;

                echo "<tr>
                          <td>$i</td>
                          <td>$product_name</td>
                          <td><img src='admin/$product_photo' width=120 height=100></td>
                          <td>$product_price</td>
                          <td>$product_quantity</td>
                          <td>$subtotal</td>
                      </tr>";
                      $i++;
              }
              @endforeach
              echo "<tr>
                          <td colspan=5>Total</td>
                          <td>$total</td>
                    </tr>";

           @endphp --}}
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
@include('layouts.sidebar');
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<style>
    .table{
        width:60%;
        margin-left:400px;
    }
    
</style>
<body>
    <!-- admin/order.blade.php -->

<div class="table-responsive" class="table">
    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Order ID</th>
                <th>User ID</th>
                <th>User name</th>
                <th>Product</th>
                <th>Product ID</th>
                <th>Quantity</th>
                <th>Address ID</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->user_id }}</td>
                <td>{{ $order->user->name }}</td>
                <td>{{ $order->product->title }}</td>
                <td>{{ $order->product_id }}</td>
                <td>{{ $order->quantity }}</td>
                <td>{{ $order->address_id }}</td>
                <td>{{ $order->created_at }}</td>
            </tr>
            @endforeach
</tbody                                 >
    </table>
</div>

</body>
</html>





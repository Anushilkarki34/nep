@extends('admin.layouts.home')
@section('content')
<h1>Order MANAGEMENT</h1>

<div class="container">
<h2>Order VIEW</h2>
<table border="1" style="width:100%">
<tr>
<th>id</th>
<th>quantity</th>
<th>order name</th>
<th>delete</th>
</tr>
@foreach($data as $d)
<tr>
<td>{{ $d->Or_id }}</td>
<td>{{ $d->Or_qty }}</td>
<td>{{ $d->Or_name }}</td>
<td>#</td>

<td><a href="#">delete</a></td>



</tr>
@endforeach
</table>
@endsection

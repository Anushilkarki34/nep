@extends('admin.layouts.home')
@section('content')
<h1>client MANAGEMENT</h1>

<div class="container">
<h2>client VIEW</h2>
<table border="1" style="width:100%">
<tr>
<th>id</th>
<th>name</th>
<th>email</th>
<th>location</th>
<th>phone no</th>

</tr>
@foreach($data as $d)
<tr>
<td>{{ $d->id }}</td>
<td>{{ $d->name }}</td>
<td>{{ $d->email }}</td>
<td>#</td>
<td>#</td>




</tr>
@endforeach
</table>
@endsection

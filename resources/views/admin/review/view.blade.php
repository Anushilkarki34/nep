@extends('admin.layouts.home')
@section('content')
<h1>Review MANAGEMENT</h1>

<div class="container">
<h2>Review VIEW</h2>
<table border="1" style="width:100%">
<tr>
<th>id</th>
<th>review</th>
<th>delete</th>
</tr>
@foreach($data as $d)
<tr>
<td>{{ $d->R_id }}</td>
<td>{{ $d->Review }}</td>

<td><a href="#">delete</a></td>



</tr>
@endforeach
</table>
@endsection

@extends('admin.layouts.home')
@section('content')
<h1>Complain MANAGEMENT</h1>

<div class="container">
<h2>COMPLAIN VIEW</h2>
<table border="1" style="width:100%">
<tr>
<th>id</th>
<th>title</th>
<th>detail</th>
<th>Complain by</th>
</tr>
@foreach($data as $d)
<tr>
<td>{{ $d->Co_id }}</td>
<td>{{ $d->Co_title }}</td>
<td>{{ $d->Co_detail }}</td>
<td>{{ $d->Co_by }}</td>
</tr>
@endforeach
</table>
@endsection

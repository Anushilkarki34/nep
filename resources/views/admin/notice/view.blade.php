@extends('admin.layouts.home')
@section('content')
<h1>Blog MANAGEMENT</h1>

<div class="container">
<h2>Blog VIEW</h2>
<table border="1" style="width:100%">
<tr>
<th>id</th>
<th>title</th>
<th>Notice</th>
<th>edit</th>
<th>delete</th>
</tr>
@foreach($data as $d)
<tr>
<td>{{ $d->N_id }}</td>
<td>{{ $d->N_title }}</td>
<td>{{ $d->Notice }}</td>
<td><a href="/admin/notice/edit/{{ $d->N_id }}">edit<a></td>
<td><a href="/admin/notice/delete/{{ $d->N_id }}">delete</a></td>



</tr>
@endforeach
</table>
@endsection

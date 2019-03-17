@extends('admin.layouts.home')
@section('content')
<h1>Blog MANAGEMENT</h1>

<div class="container">
<h2>Blog VIEW</h2>
<table border="1" style="width:100%">
<tr>
<th>id</th>
<th>title</th>
<th>detail</th>
<th>image</th>
<th>edit</th>
<th>delete</th>
</tr>
@foreach($data as $d)
<tr>
<td>{{ $d->B_id }}</td>
<td>{{ $d->B_title }}</td>
<td>{{ $d->B_detail }}</td>
<td>#</td>
<td><a href="/admin/blog/edit/{{ $d->B_id }}">edit<a></td>
<td><a href="/admin/blog/delete/{{ $d->B_id }}">delete</a></td>



</tr>
@endforeach
</table>
@endsection

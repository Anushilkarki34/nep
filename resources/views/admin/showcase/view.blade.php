@extends('admin.layouts.home')
@section('content')
<h1>SHOWCASE MANAGEMENT</h1>

<div class="container">
<h2>Showcase VIEW</h2>
<table border="1" style="width:100%">
<tr>
<th>id</th>
<th>title</th>
<th>link</th>
<th>image</th>
<th>edit</th>
<th>delete</th>
</tr>
@foreach($data as $d)
<tr>
<td>{{ $d->S_id }}</td>
<td>{{ $d->S_name }}</td>
<td>{{ $d->S_link }}</td>
<td>#</td>
<td><a href="/admin/showcase/edit/{{ $d->S_id }}">edit<a></td>
<td><a href="/admin/showcase/delete/{{ $d->S_id }}">delete</a></td>



</tr>
@endforeach
</table>
@endsection

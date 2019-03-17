@extends('admin.layouts.home')
@section('content')
<h1>Message MANAGEMENT</h1>

<div class="container">
<h2>Message VIEW</h2>
<table border="1" style="width:100%">
<tr>
<th>id</th>
<th>to</th>
<th>from</th>
<th>message</th>
<th>edit</th>
<th>delete</th>
</tr>
@foreach($data as $d)
<tr>
<td>{{ $d->M_id }}</td>
<td>{{ $d->M_to }}</td>
<td>{{ $d->M_from }}</td>
<td>{{ $d->Message }}</td>
<td><a href="/admin/msg/edit/{{ $d->M_id }}">edit<a></td>
<td><a href="/admin/msg/delete/{{ $d->M_id }}">delete</a></td>



</tr>
@endforeach
</table>
@endsection

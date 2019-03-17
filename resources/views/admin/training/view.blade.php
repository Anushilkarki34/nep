@extends('admin.layouts.home')
@section('content')
<h1>Training MANAGEMENT</h1>

<div class="container">
<h2>Training VIEW</h2>
<table border="1" style="width:100%">
<tr>
<th>id</th>
<th>title</th>
<th>detail</th>
<th>file</th>
<th>edit</th>
<th>delete</th>
</tr>
@foreach($data as $d)
<tr>
<td>{{ $d->T_id }}</td>
<td>{{ $d->T_title }}</td>
<td>{{ $d->T_detail }}</td>
<td>#</td>
<td><a href="/admin/training/edit/{{ $d->T_id }}">edit<a></td>
<td><a href="/admin/training/delete/{{ $d->T_id }}">delete</a></td>



</tr>
@endforeach
</table>
@endsection

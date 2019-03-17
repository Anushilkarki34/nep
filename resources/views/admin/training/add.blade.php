@extends('admin.layouts.home')
@section('content')
<div class="row">
<form action="/admin/training/add" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="form-group">
<label>Training Title</label>
<input type="text" name="T_title"/>
</div>
<div class="form-group">
<label>detail</label>
<input type="text" name="T_detail"/>
</div>
<div class="form-group">
<label>file</label>
<input type="file" name="T_file"/>
</div>

<div class="form-group">
<button type="submit">add training</button>
</div>
</form>
</div>
@endsection

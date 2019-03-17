@extends('admin.layouts.home')
@section('content')
<div class="row">
<form action="/admin/showcase/add" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="form-group">
<label>project name</label>
<input type="text" name="S_name"/>
</div>
<div class="form-group">
<label>link</label>
<input type="text" name="S_link"/>
</div>
<div class="form-group">
<label>image</label>
<input type="file" name="S_image"/>
</div>

<div class="form-group">
<button type="submit">add to showcase</button>
</div>
</form>
</div>
@endsection

@extends('admin.layouts.home')
@section('content')
<div class="row">
<form action="/admin/blog/add" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="form-group">
<label>blog Title</label>
<input type="text" name="B_title"/>
</div>
<div class="form-group">
<label>content</label>
<input type="text" name="B_detail"/>
</div>
<div class="form-group">
<label>image</label>
<input type="file" name="B_image"/>
</div>

<div class="form-group">
<button type="submit">add blog</button>
</div>
</form>
</div>
@endsection

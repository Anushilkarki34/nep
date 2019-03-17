@extends('admin.layouts.home')
@section('content')
<div class="row">
<form action="/admin/notice/add" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="form-group">
<label>Notice Title</label>
<input type="text" name="N_title"/>
</div>
<div class="form-group">
<label>content</label>
<input type="text" name="Notice"/>
</div>


<div class="form-group">
<button type="submit">add Notice</button>
</div>
</form>
</div>
@endsection

@extends('admin.layouts.home')
@section('content')
<div class="row">
<form action="/admin/blog/edit/<?php echo $data[0]->B_id;  ?>" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
@foreach($data as $d)
<div class="form-group">
<label>blog Title</label>
<input type="text" name="B_title" value="<?php echo $d->B_title;  ?>"/>
</div>
<div class="form-group">
<label>content</label>
<input type="text" name="B_detail" value="<?php echo $d->B_detail; ?>"/>
</div>
<div class="form-group">
<label>image</label>
<input type="file" name="B_image"/>
</div>

<div class="form-group">
<button type="submit">edit blog</button>
</div>
@endforeach
</form>
</div>
@endsection

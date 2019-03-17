@extends('admin.layouts.home')
@section('content')
<div class="row">
<form action="/admin/notice/edit/<?php echo $data[0]->N_id; ?>" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
@foreach($data as $d)
<div class="form-group">
<label>Notice Title</label>
<input type="text" name="N_title" value="<?php echo $d->N_title; ?>"/>
</div>
<div class="form-group">
<label>Notice</label>
<input type="text" name="Notice" value="<?php echo $d->Notice; ?>"/>
</div>


<div class="form-group">
<button type="submit">add Notice</button>
</div>
@endforeach
</form>
</div>
@endsection

@extends('admin.layouts.home')
@section('content')
<div class="row">
<form action="/admin/training/edit/<?php echo $data[0]->T_id; ?>" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
@foreach($data as $d)
<div class="form-group">
<label>Training Title</label>
<input type="text" name="T_title" value="<?php echo $d->T_title; ?>"/>
</div>
<div class="form-group">
<label>detail</label>
<input type="text" name="T_detail" value="<?php echo $d->T_detail; ?>"/>
</div>
<div class="form-group">
<label>file</label>
<input type="file" name="T_file"/>
</div>

<div class="form-group">
<button type="submit">edit training</button>
</div>
@endforeach
</form>
</div>
@endsection

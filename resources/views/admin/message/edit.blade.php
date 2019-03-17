@extends('admin.layouts.home')
@section('content')
<div class="row">
<form action="/admin/msg/edit/<?php echo $data[0]->M_id; ?>" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="form-group">
<label>email To</label>
<input type="textarea" name="M_to"/>
</div>
<div class="form-group">
<label>from</label>
<input type="radio" name="M_from" value="<?php echo Auth::guard('admin')->user()->name; ?>" checked><?php echo Auth::guard('admin')->user()->name; ?> <br>
</div>
<div class="form-group">
<label>Message</label>
<input type="file" name="Message"/>
</div>

<div class="form-group">
<button type="submit">send email</button>
</div>
</form>
</div>
@endsection

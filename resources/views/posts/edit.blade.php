



@extends('layouts.app')

@section('content')


@if($errors->any())
@foreach($errors->all() as $error)
<div class="alert alert-danger" >
	{{$error}}
</div>
@endforeach
@endif


{!!Form::open(['url'=>array('post/update',$post->id) ,'enctype'=>'multipart/form-data'])!!}


<div class="form-group">
	<label for="">title:</label>
	<input type="text" class="form-control"  " name="title" placeholder="Enter post title" value="{{$post->title}}"/>


</div>
<div class="form-group">
	<label for="">description</label>
	<textarea name="postdescription" class="form-control" placeholder="must be more than 100 character">{{$post->postdescription}}</textarea>
</div>
<div class="form-group">
	<label for="">tag</label>
	<textarea name="posttag" class="form-control">{{$post->posttag}}</textarea>
</div>








<div class="form-group">
    <label  for="file">image:</label>
<input name="image" type="file" accept="image/*" class="form-control" />

</div>




<button type="submit" class="btn btn-primary">Submit</button>
{!!Form::close()!!}










@endsection
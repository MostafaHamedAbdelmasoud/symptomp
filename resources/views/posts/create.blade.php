@extends('layouts.app')



@section('content')

@if($errors->any())
    @foreach($errors->all() as $error)
        <div class="alert alert-danger" >
            {{$error}}
        </div>
    @endforeach
@endif


{!!Form::open(['url'=>'post/storePost','enctype'=>'multipart/form-data'])!!}


    <div class="form-group">
    <label for="exampleInputEmail1">title</label>
    <input type="text" class="form-control"   name="title" placeholder="Enter post title" value="{{old('title')}}">
        

</div>






<div class="form-group">
    <label for="exampleInputEmail1">description:</label>
<textarea name="postdescription" class="form-control" placeholder="must be more than 100 character" >{{old('postdescription')}}</textarea>
</div>


<div class="form-group">
    <label for="exampleInputEmail1">tag:</label>
<textarea name="posttag" class="form-control" >{{old('posttag')}}</textarea>
</div>



<div class="form-group">
    <label  for="file">image:</label>
<input name="image" type="file" accept="image/*" class="form-control" />

</div>

        
        

<button type="submit" class="btn btn-primary">Submit</button>
{!!Form::close()!!}





@endsection
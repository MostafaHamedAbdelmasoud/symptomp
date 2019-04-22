




@extends('layouts.app')

@section('content')

<!-- 

<div style="background-color:#245;" class="gft">
	<a style="color:#894;font-size:22px;" class="p-4" href="{{url('/post/edit'.'/'.$post->id)}}">Edit</a>
	<a style="color:red;font-size:22px;" href="{{url('/post/destroy'.'/'.$post->id)}}">Delete</a>


</div> -->




<div class=" text-center w-100 bg-yellow py-3" >

    <i>
    <h2 class="card-title pb-2" style="color:#09c; ">{{$post->title}}</h2>
    </i>
    <p style="color:gray;  left:5px;
    top:20%;" class="text-right">

تاريخ: {{  substr($post->updated_at->toDateTimeString(), 0,10)
}}

    </p>
    <hr class="pb-2">
<img class="img-fluid" style="height:500px;width:700px;" src="{{asset('/assets/images/posts'.'/'.$post->image)}}">
  <div class="card-body">
    <h5 class="card-title"></h5>
    <hr class="my-4">

    <p class="card-text " style="color:black; font-size: 20px; line-height:1.8rem;">{{$post->postdescription}}</p>

    @guest
   
    <div class="text-left" class="btn btn-danger">

<a href="{{ URL::previous() }}
		 " class="btn  btn-lg btn-danger">
	<span><i class="fas fa-arrow-left"></i></span>
	رجوع</a>  
</div>

    @endguest
   

 @if (Auth::user())
@if(Auth::user()->is_admin == 1)
    <a href="{{url('/post/edit'.'/'.$post->id)}}" class="btn btn-success">Edit</a>
    <a href="{{url('/post/destroy'.'/'.$post->id)}}" class="btn btn-danger">Delete</a>
    <a href="{{url('/post/create')}}" class="btn btn-primary">Create New One</a>

    <div class="text-left" class="btn btn-danger">

<a href="{{ URL::previous() }}
		 " class="btn  btn-lg btn-danger">
	<span><i class="fas fa-arrow-left"></i></span>
	رجوع</a>  
</div>
@else

<div class="text-left" class="btn btn-danger">

<a href="{{ URL::previous() }}
		 " class="btn  btn-lg btn-danger">
	<span><i class="fas fa-arrow-left"></i></span>
	رجوع</a>  
</div>
@endif

@endif




  </div>
</div>


<!-- <div class="col-md-12 text-center">
<br>
<h4 style="color:#09c;">{{$post->title}}</h4> 
<br>
<img class="img-fluid" style="height:500px;width:700px;" src="{{asset('/assets/images/posts'.'/'.$post->image)}}">
<hr>
</div>



<div class="col-md-12 text-right">


</p>
<p>{{$post->postdescription}} 
</p>
<br>

<br>
<br>
<br>
    <p style="color:gray; position:absolute; left:5px;
    bottom:0px;">


    </p>






</div> -->

















@endsection
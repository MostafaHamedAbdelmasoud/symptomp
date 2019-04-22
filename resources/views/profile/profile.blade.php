@extends('layouts.app')

@section('content')



<div class="col-md-4">
<div class="image-user text-center">

@if(Auth::user()->gender == 'male')
<img src="{{asset('assets/images/man.png')}}" style="height:250px;	background-color: rgba(0, 0, 0, 0.3);" class="img-fluid rounded-circle image-profile p-1" >
@else
<img src="{{asset('assets/images/girl.png')}}" style="height:250px;	background-color: rgba(0, 0, 0, 0.3);" class="img-fluid rounded-circle image-profile p-1" >

@endif


</div>
</div>



<div class="col-md-6 pt-4">
<div class="image-user text-center">
<p style="font-size:32px; color:#09c; font-weight:600;">	<span style="color:black;">WELCOME</span>   &#64;{{Auth::user()->name}}</p>

<!-- <p style="font-size:22px; font-weight:600;">	&#64;{{Auth::user()->name}}</p> -->

<p style="font-size:22px; font-weight:600;">	mail: {{Auth::user()->email}}</p>

<p style="font-size:22px; font-weight:600;">	gender: {{Auth::user()->gender}}</p>



</div>
</div>




@endsection
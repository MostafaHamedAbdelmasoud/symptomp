

@extends('layouts.app')

@section('content')





		
<div  id ="parts" class="container text-center">
  <div id="1" class="jumbotron text-center">
	
		<p style="text-align:center; color:black;font-size:25px; font-weight:500; line-height:2rem; " class="flex-wrap py-3">
    ألم القدم
    <br>
    الى جانب الم القدم، هل لاحظت وجود تورم، او احمرار في قدمك (او قدميك)؟

		<div id="demo" class="collapse">

		</div>
   
    <a href="{{ url('/legs121') }}">
      <button  id="b1" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo">	نعم لقد لاحظت وجود تورم</button></a>
        
      <br>
      <br>
    
	
  </div>

    
@endsection
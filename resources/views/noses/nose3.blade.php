

@extends('layouts.app')

@section('content')





		
<div  id ="parts" class="container text-center">
  <div id="1" class="jumbotron text-center">
	
		<p style="text-align:center; color:black;font-size:25px; font-weight:500; line-height:2rem; " class="flex-wrap py-3">
      		
  ألم الأذن عند الكبار
  <br>
هل تلاحظ اي احمرار او تورم في الجزء الخارجي للاذن؟

 
</p>
            
		<div id="demo" class="collapse">

		</div>
   
    <a href="{{ url('/nose31') }}">
      <button  id="b1" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo">	 نعم الجزء الخارجي من أذني أحمر أو متورم</button></a>
        
      <br>
      <br>
    <a href="{{ url('/nose32') }}">	
    <button  id="b2" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo"> لا الجزء الخارجي من أذني ليس أحمر أو متورم   </button></a>
		
	
  </div>
		
    
@endsection
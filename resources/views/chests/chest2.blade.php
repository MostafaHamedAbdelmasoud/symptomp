

@extends('layouts.app')

@section('content')





		
<div  id ="parts" class="container text-center">
  <div id="1" class="jumbotron text-center">
	
		<p style="text-align:center; color:black;font-size:25px; font-weight:500; line-height:2rem; " class="flex-wrap py-3">
      		
خفقان القلب
  <br>
هل تعاني من خفقان القلب الان؟

 
</p>
            
		<div id="demo" class="collapse">

		</div>
   
    <a href="{{ url('/chest21') }}">
      <button  id="b1" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo">	 نعم  </button></a>
        
      <br>
      <br>
    <a href="{{ url('/chest22') }}">	
    <button  id="b2" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo"> لا   </button></a>
		
	
  </div>
		
    
@endsection
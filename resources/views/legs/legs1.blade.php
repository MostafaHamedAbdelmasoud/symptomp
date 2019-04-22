

@extends('layouts.app')

@section('content')





		
<div  id ="parts" class="container text-center">
  <div id="1" class="jumbotron text-center">
	
		<p style="text-align:center; color:black;font-size:25px; font-weight:500; line-height:2rem; " class="flex-wrap py-3">
      		
  ألم القدم
  <br>
  هل بدأ ألمك بعد إصابة كبيرة، مثل: السقوط، أو حادث سيارة؟
 
</p>
            
		<div id="demo" class="collapse">

		</div>
   
    <a href="{{ url('/legs11') }}">
      <button  id="b1" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo">	 نعم بدأ ألمي بعد إصابة كبيرة  </button></a>
        
      <br>
      <br>
    <a href="{{ url('/legs12') }}">	
    <button  id="b2" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo"> لا لم يحدث ألمي بعد إصابة شديدة   </button></a>
		
	
  </div>
		
    
@endsection
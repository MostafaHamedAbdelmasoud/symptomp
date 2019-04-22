

@extends('layouts.app')

@section('content')





		
<div  id ="parts" class="container text-center">
  <div id="1" class="jumbotron text-center">
	
		<p style="text-align:center; color:black;font-size:25px; font-weight:500; line-height:2rem; " class="flex-wrap py-3">
السعال و البرد

  <br>
ما هو العرض الاكثر ازعاجا بالنسبة لك من القائمة التالية؟

  
</p>
            
		<div id="demo" class="collapse">

		</div>
   
    <a href="{{ url('/nose11') }}">
      <button  id="b1" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo">	 سعال صير مع التنفس أو صعوبة في التنفس  </button></a>
        
      <br>
      <br>
    <a href="{{ url('/nose12') }}">	
    <button  id="b2" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo"> إلتهاب في الحلق   </button></a>
		
	
  </div>
		
    
@endsection
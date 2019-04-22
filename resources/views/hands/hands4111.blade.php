
@extends('layouts.app')

@section('content')





		
<div  id ="parts" class="container text-center">
  <div id="1" class="jumbotron text-center">
	
		<p style="text-align:center; color:black;font-size:25px; font-weight:500; line-height:2rem; " class="flex-wrap py-3">
 العامل الروماتويدي الايجابي
  <br>
  
وهل تعاني من حمى (درجة حرارة الجسم اعلى من 38.2 س)؟
 
</p>
            
		<div id="demo" class="collapse">

		</div>
   
    <a href="{{ url('/hands41111') }}">
      <button  id="b1" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo">	نعم، أنا أعاني من ارتفاع درجة الحرارة لتكون 38.2 س، أو أعلى.  </button></a>
        <br>
      
	  
    <a href="{{ url('/hands41112') }}">
      <button  id="b1" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo">لا توجد حمى</button></a>
        
		
	
  </div>
	</div>	
    
@endsection
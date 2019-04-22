@extends('layouts.app')

@section('content')





		
<div  id ="parts" class="container text-center">
  <div id="1" class="jumbotron text-center">
	
		<p style="text-align:center; color:black;font-size:25px; font-weight:500; line-height:2rem; " class="flex-wrap py-3">
 العامل الروماتويدي الايجابي
  <br>

		حسنا.. سوف نوجه لك سلسلة من الاسئلة عن الاعراض الشائعة في الحالات التي يرافقها العامل الروماتويدي
<br>
اولا: هل تعاني من الم المفاصل؟
			
	
 
</p>
            
		<div id="demo" class="collapse">

		</div>
    
    <a href="{{ url('/hands411') }}">
      <button  id="b1" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo">نعم، أنا أعاني من ألم المفاصل	 </button></a>
        <br>
      
	  
    <a href="{{ url('/hands412') }}">
      <button  id="b1" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo">لا، أنا لا أعاني من ألم المفاصل</button></a>
        
		
	
  </div>
	
    
@endsection
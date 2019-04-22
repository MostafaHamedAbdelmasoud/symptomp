

@extends('layouts.app')

@section('content')





		 
<div  id ="parts" class="container text-center">
  <div id="1" class="jumbotron text-center">
	
		<p style="text-align:center; color:black;font-size:25px; font-weight:500; line-height:2rem; " class="flex-wrap py-3">
ألم المرفق
  <br>
  
		
		:هل تعاني من الم شديد في المرفق، اضافة الى اي من الاعراض التالية 
		
		الحمى*<br>
الاحمرار*<br>
تورم شديد*<br>
عدم القدرة على استخدام المفصل*<br>
او صدمة كبيرة حديثة (سقوط، او حادث سيارة، ... الخ)؟*<br><hr>
		
 
</p>
            
		<div id="demo" class="collapse">

		</div>
   
    <a href="{{ url('/hands11') }}">
      <button  id="b1" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo">	نعم اعاني من تلك الاعراض </button></a>
        
      
		
	
  </div>
		
    
@endsection
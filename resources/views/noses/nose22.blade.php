

@extends('layouts.app')

@section('content')





		
<div  id ="parts" class="container text-center">
  <div id="1" class="jumbotron text-center">
	
		<p style="text-align:center; color:black;font-size:25px; font-weight:500; line-height:2rem; " class="flex-wrap py-3">
    جفاف الفم و العطش الشديد
    <br>
حسنا، تقدم السن هو سبب اقل احتمالا لجفاف الفم او العطش الزائد لديك. الشخص الذي يعاني من جفاف الفم احيانا، يعاني من جفاف العين ايضا.

هل تعاني من جفاف العين ايضا؟
</p>
            
		<div id="demo" class="collapse">

		</div>
   
    <a href="{{ url('/nose221') }}">
      <button  id="b1" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo">	نعم أعاني من جفاف العين إضافة لجفاف الفم</button></a>
        
      <br>
      <br>
    
	
  </div>


		
    
@endsection
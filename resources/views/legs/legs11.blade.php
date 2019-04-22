

@extends('layouts.app')

@section('content')





		
<div  id ="parts" class="container text-center">
  <div id="1" class="jumbotron text-center">
	
		<p style="text-align:center; color:black;font-size:25px; font-weight:500; line-height:2rem; " class="flex-wrap py-3">
    ألم القدم
    <br>
حسنا. هذا يرفع من احتمالية وجود كسر في العظام، او اصابة للاربطة ,هل يصاحب الم قدمك اي من التالي؟
تورم شديد
تشوه القدم
كدمة شديدة، او نزيف لوقت طويل
عدم القدرة على المشي، او حمل الاشياء
</p>
            
		<div id="demo" class="collapse">

		</div>
   
    <a href="{{ url('/legs111') }}">
      <button  id="b1" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo">	 نعم أعاني من واحده أو  من هذه الأعراض</button></a>
        
      <br>
      <br>
    
	
  </div>


		
    
@endsection
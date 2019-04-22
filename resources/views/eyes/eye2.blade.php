

@extends('layouts.app')

@section('content')





		
<div  id ="parts" class="container text-center">
  <div id="1" class="jumbotron text-center">
	
		<p style="text-align:center; color:black;font-size:25px; font-weight:500; line-height:2rem; " class="flex-wrap py-3">
      		
افرازات العين
	<br>
اضافة الى افرازات العين، هل تعاني من اي من الاعراض الاتية؟

تورم الوجه، او اليدين
حكة، او هرش، او خطوط بالجلد
صفير مع التنفس
</p>
            
		<div id="demo" class="collapse">

		</div>
   
    <a href="{{ url('/eye21') }}">
      <button  id="b1" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo">	نعم أنا أعاني من واحده أو أكثر من هذه الأعراض  </button></a>
	  
	  <a href="{{ url('/eye22') }}">
      <button  id="b1" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo">	لا أنا لا أعاني من هذه الاعراض  </button></a>
        
      <br>
      <br>
 
		
	
  </div>
		
    
@endsection
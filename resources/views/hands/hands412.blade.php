@extends('layouts.app')

@section('content')





		
<div  id ="parts" class="container text-center">
  <div id="1" class="jumbotron text-center">
	
		<p style="text-align:center; color:black;font-size:25px; font-weight:500; line-height:2rem; " class="flex-wrap py-3">
   العامل الروماتويدي الايجابي
    <br>


ممتاز. هذا يجعل التهاب المفاصل الروماتويدي غير محتمل جدا. هل لديك اي من عوامل الخطورة، او الاعراض، او الحالات التالية: ·الالتهاب الكبدي ب ·الالتهاب الكبدي ج (C) ·مرض اخر في الكبد ·استخدام دواء وريدي، او الكوكايين في اي وقت في الماضي ·اتصال جنسي مع شخص يعاني من الالتهاب الكبدي، او الايدز ·نقل دم في الماضي



</p>
            
		<div id="demo" class="collapse">

		</div>
   
    <a href="{{ url('/hands4121') }}">
      <button  id="b1" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo">نعم، أنا أعاني من هذه</button></a>
      
	 
		
      <br>
      <br>
    
	
  </div>


		
    
@endsection
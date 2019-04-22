

@extends('layouts.app')

@section('content')





		
<div  id ="parts" class="container text-center">
  <div id="1" class="jumbotron text-center">
	
		<p style="text-align:center; color:black;font-size:25px; font-weight:500; line-height:2rem; " class="flex-wrap py-3">
    خفقان القلب
    <br>
مشخص الأعراض خفقان القلب
خفقان القلب
هناك اعراض معينة يمكن ان تحدث مع خفقان القلب، تجعله مقلقا ويتطلب الاهتمام الفوري.

عندما كنت تعاني من خفقان القلب في الماضي، هل كنت تعاني من واحد او اكثر من هذه الاعراض؟

الم الصدر
ضيق في التنفس
الم في الظهر، الكتفين او الذراعين
دوار او اغماء
عرق غزير
</p>
            
		<div id="demo" class="collapse">

		</div>
   
    <a href="{{ url('/chest221') }}">
      <button  id="b1" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo">	نعم هذا صحيح </button></a>
        
      <br>
      <br>
    
	
  </div>


		
    
@endsection
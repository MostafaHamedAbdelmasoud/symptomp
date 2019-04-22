
@extends('layouts.app')

@section('content')





		
<div  id ="parts" class="container text-center">
  <div id="1" class="jumbotron text-center">
	
		<p style="text-align:center; color:black;font-size:25px; font-weight:500; line-height:2rem; " class="flex-wrap py-3">
 العامل الروماتويدي الايجابي
  <br>
  
		.مرحبا بك في دليل العامل الروماتويدي الايجابي

<br>
تم تصميم هذا الدليل من اجل الاشخاص الذين لديهم عامل روماتويدي ايجابي .والذين يرغبون في معرفة المزيد عن هذا الاختبار، وماذا يمكن ان تعني نتيجة هذا الاختبار 
!اول شيء: لا تقلق! هذا الاختبار ليس دقيقا جدا، لدرجة ان نتيجته لا تعني شيئا حتميا
.واعتمادا على اعراضك، وسبب طلب اجراء الاختبار، يمكن عادة تحديد اهمية (او عدم اهمية) نتيجة اختبارك

<br><br>
هل ترغب في معرفة المزيد من المعلومات عن اختبار العامل الروماتويدي عامة
 
</p>
            
		<div id="demo" class="collapse">

		</div>
   
    <a href="{{ url('/hands41') }}">
      <button  id="b1" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo">	أنا أرغب في معرفة معلومات تخص حالتي الخاصة بشكل أكثر  </button></a>
        <br>
      
	  
    <a href="{{ url('/hands42') }}">
      <button  id="b1" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo">أنا أود بدايةً أن أعرف معلومات عامة عن العامل الروماتويدي</button></a>
        
		
	
  </div>
	</div>	
    
@endsection
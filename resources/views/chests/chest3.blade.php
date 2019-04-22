

@extends('layouts.app')

@section('content')





		
<div  id ="parts" class="container text-center">
  <div id="1" class="jumbotron text-center">
	
		<p style="text-align:center; color:black;font-size:25px; font-weight:500; line-height:2rem; " class="flex-wrap py-3">
      		
  ألم أسفل الظهر
  <br>
قد يكون الم الظهر احيانا بسبب حالة تتطلب تقييما طبيا فوريا.

هل لديك تاريخ مرضي لاي من التالي:

سرطان
حمى مصاحبة لالم ظهرك
الم شديد او غير محتمل في الظهر
فقدان الوزن
صدمة حديثة شديدة (مثل: السقوط او حادث سيارة)
عدم القدرة على التحكم في التبول او التبرز؟ 
</p>
            
		<div id="demo" class="collapse">

		</div>
   
    <a href="{{ url('/chest31') }}">
      <button  id="b1" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo">	 نعم لواحده أو أكثر من هذه  </button></a>
        
      <br>
      <br>
    <a href="{{ url('/chest32') }}">	
    <button  id="b2" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo"> لا لجميعها  </button></a>
		
	
  </div>
		
    
@endsection
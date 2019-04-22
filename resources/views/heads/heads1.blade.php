

@extends('layouts.app')

@section('content')





		
<div  id ="parts" class="container text-center">
  <div id="1" class="jumbotron text-center">
	
		<p style="text-align:center; color:black;font-size:25px; font-weight:500; line-height:2rem; " class="flex-wrap py-3">
      		
        تساقط الشعر

  <br>

الى جانب تساقط الشعر، هل لاحظت وجود اي من التغيرات التالية في جلدة فروة راسك؟

احمرار

قشور

تهيج او هرش

تليف

قرح مفتوحة

 
</p>
            
		<div id="demo" class="collapse">

		</div>
   
    <a href="{{ url('/heads11') }}">
      <button  id="b1" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo">	  نعم أعاني من إحدى هذه الأعراض  </button></a>
        
      <br>
      <br>
    <a href="{{ url('/heads12') }}">	
    <button  id="b2" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo">  لا، جلد فروة رأسي طبيعي   </button></a>
		
	
  </div>
		
    
@endsection


@extends('layouts.app')

@section('content')





		
<div  id ="parts" class="container text-center">
  <div id="1" class="jumbotron text-center">
	
		<p style="text-align:center; color:black;font-size:25px; font-weight:500; line-height:2rem; " class="flex-wrap py-3">
    ألم الأذن عند الكبار
    <br>
    من المحتمل ان يكون التورم مرتبطا بمشكلة اعمق في قناة الاذن او خلف طبلة الاذن. قد تسبب العدوى عدم الارتياح هذا او ربما تجعلك تشعر انك مريض، بسبب الحمى والالام الجسدية.

هل تعاني من واحد او اكثر من الاعراض التالية؟

تشعر انك مريض
الحمى
احتقان الانف او اعراض البرد الاخرى
الم عند شد شحمة الاذن

		<div id="demo" class="collapse">

		</div>
   
        <a href="{{ url('nose321') }}">

      <button  id="b1" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo">	نعم أنا أعاني من واحده أو أكثر من هذه الأعراض</button></a>
        
      <br>
      <br>
    
	
  </div>

    
@endsection
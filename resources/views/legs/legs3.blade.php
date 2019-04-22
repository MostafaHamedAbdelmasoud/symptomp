

@extends('layouts.app')

@section('content')





		
<div  id ="parts" class="container text-center">
  <div id="1" class="jumbotron text-center">
	
		<p style="text-align:center; color:black;font-size:25px; font-weight:500; line-height:2rem; " class="flex-wrap py-3">
      		
  ألم القدم
  <br>
  هل تعاني من واحد او اكثر من التالي، الى جانب الم ركبتك:
الحمى
احمرار على او حول مفصل الركبة
تورم كبير لمفصل الركبة
عدم القدرة على استخدام الركبة
اصابة كبيرة حديثة للركبة مثل السقوط او حادث سيارة؟


</p>
            
		<div id="demo" class="collapse">

		</div>
   
    <a href="{{ url('/legs31') }}">
      <button  id="b1" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo">	نعم اعاني من واحده أو أكثر  </button></a>
        
      <br>
      <br>
    <a href="{{ url('/legs32') }}">	
    <button  id="b2" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo"> لا لا أعاني      </button></a>
		
	
  </div>
		
    
@endsection
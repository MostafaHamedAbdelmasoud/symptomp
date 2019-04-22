

@extends('layouts.app')

@section('content')





		
<div  id ="parts" class="container text-center">
  <div id="1" class="jumbotron text-center">
	
		<p style="text-align:center; color:black;font-size:25px; font-weight:500; line-height:2rem; " class="flex-wrap py-3">
      		
  جفاف الفم و العطش
  <br>
  بداية، سؤال عن عمرك. نحن نسال عن هذا؛ لان انتاج اللعاب ينخفض بتقدم العمر احيانا.

هل تبلغ من العمر 60 سنة على الاقل؟
 
</p>
            
		<div id="demo" class="collapse">

		</div>
   
    <a href="{{ url('/nose21') }}">
      <button  id="b1" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo">	 نعم أنا أبلغ من العمر 60 سنة على الأقل </button></a>
        
      <br>
      <br>
    <a href="{{ url('/nose22') }}">	
    <button  id="b2" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo"> لا أنا أصغر من 60 عاما من العمر   </button></a>
		
	
  </div>
		
    
@endsection
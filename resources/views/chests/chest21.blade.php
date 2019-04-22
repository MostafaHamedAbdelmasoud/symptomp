

@extends('layouts.app')

@section('content')





		
<div  id ="parts" class="container text-center">
  <div id="1" class="jumbotron text-center">
	
		<p style="text-align:center; color:black;font-size:25px; font-weight:500; line-height:2rem; " class="flex-wrap py-3">
    خفقان القلب
    <br>
يتطلب خفقان القلب اهتماما فوريا احيانا.

هل تعاني من اي من هذه الاعراض، الى جانب خفقان القلب؟

الم الصدر
ضيق في التنفس
الم في الظهر، الكتفين او الذراعين
دوار او اغماء
عرق غزير
</p>
            
		<div id="demo" class="collapse">

		</div>
   
    <a href="{{ url('/chest211') }}">
      <button  id="b1" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo">	 نعم </button></a>
        
      <br>
      <br>
    
	
  </div>


		
    
@endsection
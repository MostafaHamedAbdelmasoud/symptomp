

@extends('layouts.app')

@section('content')





		
<div  id ="parts" class="container text-center">
  <div id="1" class="jumbotron text-center">
	
		<p style="text-align:center; color:black;font-size:25px; font-weight:500; line-height:2rem; " class="flex-wrap py-3">
    جفاف الفم و العطش الشديد
    <br>
يمكن ان يكون جفاف الفم لديك، بسبب انخفاض انتاج اللعاب الذي يصاحب تقدم العمر احيانا. رغم ذلك، لا تكون الاعراض مرتبطة بتقدم العمر فقط. في الحقيقة، العديد من كبار السن، يكون لديهم انتاج دموع ولعاب طبيعي تماما. هناك عوامل اخرى تساهم في جفاف الفم او العطش الزائد؛ لذلك دعنا ننتقل الى بعض الاسئلة الاضافية.

هل تعاني من جفاف العين ايضا؟
</p>
            
		<div id="demo" class="collapse">

		</div>
   
    <a href="{{ url('/nose211') }}">
      <button  id="b1" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo">	نعم أعاني من جفاف العين إضافة لجفاف الفم</button></a>
        
      <br>
      <br>
    
	
  </div>


		
    
@endsection
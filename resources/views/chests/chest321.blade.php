

@extends('layouts.app')

@section('content')





		
<div  id ="parts" class="container text-center">
  <div id="1" class="jumbotron text-center">
	
		<p style="text-align:center; color:black;font-size:25px; font-weight:500; line-height:2rem; " class="flex-wrap py-3">
    ألم أسفل الظهر
    <br>
	
	احدى الاسباب التي تجعل الم الظهر شائع جدا، هو ان التركيبة التشريحية للظهر معقدة جدا. اضافة الى ذلك، يتم استخدام الظهر كثيرا بشكل خاطئ، خلال الانشطة المعتادة في الحياة اليومية.

 

هل شعرت بالمك البسيط منذ اقل من ثلاثة اسابيع؟

</p>
            
		<div id="demo" class="collapse">

		</div>
   
    <a href="{{ url('/chest3211') }}">
      <button  id="b1" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo">	نعم أعاني من الألم لمده أقل من ثلاثة أسابيع</button></a>
        
      <br>
      <br>
    
	
  </div>


		
    
@endsection
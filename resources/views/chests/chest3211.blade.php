

@extends('layouts.app')

@section('content')





		
<div  id ="parts" class="container text-center">
  <div id="1" class="jumbotron text-center">
	
		<p style="text-align:center; color:black;font-size:25px; font-weight:500; line-height:2rem; " class="flex-wrap py-3">
    ألم أسفل الظهر
    <br>
	
هل حدث عندك اي تغير في نشاطك الذي ربما حفز الالم لديك، مثل: لعب رياضة جديدة او رفع شئ ثقيل مؤخرا؟
</p>
            
		<div id="demo" class="collapse">

		</div>
   
    <a href="{{ url('/chest32111') }}">
      <button  id="b1" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo">	نعم لقد غيرت أنشطتي</button></a>
        
      <br>
      <br>
    
	
  </div>


		
    
@endsection
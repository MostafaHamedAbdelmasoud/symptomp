

@extends('layouts.app')

@section('content')





		
<div  id ="parts" class="container text-center">
  <div id="1" class="jumbotron text-center">
	
		<p style="text-align:center; color:black;font-size:25px; font-weight:500; line-height:2rem; " class="flex-wrap py-3">
السعال و البرد
<br>
لقد علمنا ان العرض الاكثر ازعاجا لك هو السعال، العطس او صعوبة التنفس. هذه الاعراض يمكن ان تكون بسبب فيروس او مرض خطير. دعنا نفحص اعراض معينة ترجح انك تعاني من مرض خطير. اذا كانت اعراضك ترجح انك تعاني من مرض خطير، يجب مراجعة طبيبك من اجل التقييم.

 

هل تخرج دما مع السعال؟
</p>
            
		<div id="demo" class="collapse">

		</div>
   
    <a href="{{ url('/nose111') }}">
      <button  id="b1" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo">	 نعم أنا أخرج دما مع السعال</button></a>
        
      <br>
      <br>
    
	
  </div>


		
    
@endsection
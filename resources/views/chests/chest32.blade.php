

@extends('layouts.app')

@section('content')





		
<div  id ="parts" class="container text-center">
  <div id="1" class="jumbotron text-center">
	
		<p style="text-align:center; color:black;font-size:25px; font-weight:500; line-height:2rem; " class="flex-wrap py-3">
    ألم أسفل الظهر
    <br>
	هذا جيد. عدم وجود اي من هذه الاعراض، يقلل من احتمال وجود العدوى، الكسور او بعض الاسباب الاخرى التي تتطلب رعاية طبية عاجلة.

 

هل اعراضك خفيفة؟ فمثلا، هل ما زلت قادرا على القيام بمعظم انشطتك المعتادة او كلها؟
</p>
            
		<div id="demo" class="collapse">

		</div>
   
    <a href="{{ url('/chest321') }}">
      <button  id="b1" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo">	 نعم أعراضي خفيفة</button></a>
        
      <br>
      <br>
    
	
  </div>


		
    
@endsection
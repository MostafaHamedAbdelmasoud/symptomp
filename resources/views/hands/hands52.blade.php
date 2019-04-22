@extends('layouts.app')

@section('content')





		
<div  id ="parts" class="container text-center">
  <div id="1" class="jumbotron text-center">
	
		<p style="text-align:center; color:black;font-size:25px; font-weight:500; line-height:2rem; " class="flex-wrap py-3">
 الم الكتف
  <br>
 

هل اعراضك خفيفة؟ فمثلا، هل ما زلت قادرة على القيام بمعظم انشطتك المعتادة، او كلها؟

</p>
            
		<div id="demo" class="collapse">

		</div>
   
   
		<a href="{{ url('/hands521') }}">
      <button  id="b1" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo"> نعم، أعراضي خفيفة</button></a>
        <br>
      
	  
    <a href="{{ url('/hands522') }}">
      <button  id="b1" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo">لا، أعراضي شديدة</button></a>
        
		
	
  </div>
	
   
@endsection
@extends('layouts.app')

@section('content')





		
<div  id ="parts" class="container text-center">
  <div id="1" class="jumbotron text-center">
	
		<p style="text-align:center; color:black;font-size:25px; font-weight:500; line-height:2rem; " class="flex-wrap py-3">
  الم الكتف
    <br>
هل حدث المك البسيط منذ اقل من ثلاثة اسابيع؟
</p>
            
		<div id="demo" class="collapse">

		</div>
   
   <a href="{{ url('/hands5211') }}">
      <button  id="b1" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo">نعم، أنا أعاني من الألم لمدة أقل من ثلاثة أسابيع	 </button></a>
        <br>
      
	  
    <a href="{{ url('/hands5212') }}">
      <button  id="b1" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo">لا ، أنا لا أعاني من أي من هذه الأعراض</button></a>
        
		
    
	
  </div>

@include('layouts.form')
		
    
@endsection
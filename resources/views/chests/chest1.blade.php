

@extends('layouts.app')

@section('content')





		
<div  id ="parts" class="container text-center">
  <div id="1" class="jumbotron text-center">
	
		<p style="text-align:center; color:black;font-size:25px; font-weight:500; line-height:2rem; " class="flex-wrap py-3">
      		
  ألم الصدر
  <br>
  هل تعاني في الوقت الراهن من الم في الصدر، مع اي من الاعراض المذكورة اعلاه؟


 
</p>
            
		<div id="demo" class="collapse">

		</div>
   
    <a href="{{ url('/chest11') }}">
      <button  id="b1" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo">	نعم أعاني من واحده أو أكثر من هذه الأعراض  </button></a>
        
      <br>
      <br>
    <a href="{{ url('/chest12') }}">	
    <button  id="b2" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo"> لا أعاني من أي من هذه الاعراض   </button></a>
		
	
  </div>
		
    
@endsection
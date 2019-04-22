

@extends('layouts.app')

@section('content')





		
<div  id ="parts" class="container text-center">
  <div id="1" class="jumbotron text-center">
	
		<p style="text-align:center; color:black;font-size:25px; font-weight:500; line-height:2rem; " class="flex-wrap py-3">
    افرازات العين
    <br>
حسنا. الان المزيد من الاسئلة، عن الاعراض المصاحبة.

هل تعاني من اي من الاعراض التالية؟

سقوط جفن العين
ضعف عضلات الوجه
الم في الاذن
	
	</p>
            
		
		    
	 <a href="{{ url('/eye221') }}">
      <button  id="b1" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo">	نعم أنا أعاني من واحده أو أكثر من هذه الأعراض  </button></a>
        
        
      <br>
      <br>
    
	
  </div>

    
@endsection
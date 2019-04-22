
@extends('layouts.app')

@section('content')





		
<div  id ="parts" class="container text-center">
  <div id="1" class="jumbotron text-center">
	
		<p style="text-align:center; color:black;font-size:25px; font-weight:500; line-height:2rem; " class="flex-wrap py-3">
   
    <br>
العامل الروماتويدي الايجابي
<br>
وهل تعاني من الم في المفاصل لمدة 6 اسابيع على الاقل؟
</p>
            
		<div id="demo" class="collapse">

		</div>
   
    <a href="{{ url('/hands4111') }}">
      <button  id="b1" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo">	نعم، مفاصلي تزعجني منذ 6 أسابيع على الأقل</button></a>
        
      <br>
      <br>
    
	
  </div>


		
    
@endsection


@extends('layouts.app')

@section('content')





		
<div  id ="parts" class="container text-center">
  <div id="1" class="jumbotron text-center">
	
		<p style="text-align:center; color:black;font-size:25px; font-weight:500; line-height:2rem; " class="flex-wrap py-3">
    ألم القدم
    <br>
    حسنا. من المهم معرفة ذلك؛ لان بعض الحالات، مثل: التهاب المفاصل، والعدوى تصاحبها علامات الالتهاب هذه. هل حدث عندك مؤخرا (او يوجد حاليا)، طفح جلدي جديد، او حمى اعلى من 37.8 (س) او شعرت انك مريض بشكل عام؟

		<div id="demo" class="collapse">

		</div>
   
    <a  href="{{ url('/legs122') }}">
      <button  id="b1" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo">	 نعم لقد لاحظت واحده أو أكثر من هذه الأعراض  </button></a>
        
      <br>
      <br>
    
	
  </div>

    
@endsection


@extends('layouts.app')

@section('content')





		
<div  id ="parts" class="container text-center">
  <div id="1" class="jumbotron text-center">
	
		<p style="text-align:center; color:black;font-size:25px; font-weight:500; line-height:2rem; " class="flex-wrap py-3">
      		
  ألم القدم
  <br>
  السؤال التالي مقسم الى جزئين، يهدف الى التعرف على الم الركبة البسيط الذي يمكن ان يتحسن من تلقاء نفسه. الامثلة للمشاكل التي يمكن ان تؤدي الى الم الركبة البسيط مثل هذا، هي الالتواء البسيط واجهاد العضلات.
هل تعتبر الم ركبتك بسيطا؟ اي بمعنى انه بالرغم من الم ركبتك، هل ما زلت قادرا على القيام بمعظم انشطتك المعتادة او كلها، بدون صعوبة كبيرة؟
هل الم ركبتك مستمر منذ اقل من ثلاثة اسابيع؟

</p>
      
<br>
    <a href="{{ url('/legs321') }}">	
    <button  id="b2" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo"> نعم        </button></a>
		
		
	
  </div>
		
    
@endsection
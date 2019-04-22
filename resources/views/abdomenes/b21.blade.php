@extends('layouts.app')

@section('content')





		
<div  id ="parts" class="container text-center">
  <div id="1" class="jumbotron text-center">
	
		<p style="text-align:center; color:black;font-size:25px; font-weight:500; line-height:2rem; " class="flex-wrap py-3">
الاسهال
  <br>
  الالتهاب الشديد، يمكن ان يؤدي الى تاكل البطانة الداخلية للقولون، جاعلا القولون ينزف ويخرج صديدا. العدوى البكتيرية هي السبب الاكثر شيوعا للاسهال الذي يحتوي على دم، صديد وانواع العدوى هذه يجب التعرف عليها وعلاجها سريعا<p>
		هل هناك دم او صديد مختلط مع اسهالك؟
</p>
            
		<div id="demo" class="collapse">

		</div>
   
    <a href="{{ url('/b211') }}">
      <button  id="b1" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo"> نعم، هناك دم أو صديد في إسهالي</button></a>
        <br>
      
	  
    <a href="{{ url('/b212') }}">
      <button  id="b1" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo">لا يوجد دم أو صديد في إسهالي</button></a>
        
		
	
  </div>
	</div>	
    
@endsection
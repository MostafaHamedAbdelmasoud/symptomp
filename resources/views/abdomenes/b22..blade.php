@extends('layouts.app')

@section('content')





		
<div  id ="parts" class="container text-center">
  <div id="1" class="jumbotron text-center">
	
		<p style="text-align:center; color:black;font-size:25px; font-weight:500; line-height:2rem; " class="flex-wrap py-3">
الاسهال
  <br>
 لا يعني الاسهال المزمن بالضرورة، انك تعانين من مرض مزمن. في الحقيقة، من اكثر اسباب الاسهال المزمن شيوعا، هو الاثار الجانبية للادوية<br>
		هل تتناولين اي ادوية، فيتامينات، مكملات غذائية عن طريق الفم بوصفة طبية او دون وصفة طبية؟
</p>
            
		<div id="demo" class="collapse">

		</div>
   
    <a href="{{ url('/b221') }}">
      <button  id="b1" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo">نعم، أنا أتناول دواء أو أكثر عن طريق الفم </button></a>
        <br>
      
	  
    <a href="{{ url('/b222') }}">
      <button  id="b1" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo">لا، أنا لا أتناول أي أدوية عن طريق الفم</button></a>
        
		
	
  </div>
	</div>	
    
@endsection
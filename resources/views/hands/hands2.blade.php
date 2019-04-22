

@extends('layouts.app')

@section('content')





		
<div  id ="parts" class="container text-center">
  <div id="1" class="jumbotron text-center">
	
		<p style="text-align:center; color:black;font-size:25px; font-weight:500; line-height:2rem; " class="flex-wrap py-3">
 الم اليد
  <br>
  
    :قد يحدث الم اليد لاسباب عديدة، منها

الكسور والعدوى التي هي من بين الاسباب الاكثر خطرا،  
.بينما الالتواء والتهاب المفاصل من بين الاسباب الاكثر شيوعا <br>
.هناك اعراض معينة ترجح وجود سبب خطير لالم اليد، تتطلب اهتماما فوريا. من المهم ان نسال اسئلة عن هذه الاعراض بداية
<br><br>
هل انت غير قادر على تحريك يدك او هل يوجد تورم كبير او كدمات؟
 
</p>
            
		<div id="demo" class="collapse">

		</div>
   
    <a href="{{ url('/hands21') }}">
      <button  id="b1" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo">	 نعم، أنا أعاني من واحدة أو أكثر من هذه المشكلات  </button></a>
        <br>
      
	  <br>
    <a href="{{ url('/hands22') }}">
      <button  id="b1" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo">	لا، أي من هذه ليست صحيحة بالنسبة لي </button></a>
        
		
	
  </div>
	</div>	
    
@endsection
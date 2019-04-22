@extends('layouts.app')

@section('content')





		
<div  id ="parts" class="container text-center">
  <div id="1" class="jumbotron text-center">
	
		<p style="text-align:center; color:black;font-size:25px; font-weight:500; line-height:2rem; " class="flex-wrap py-3">
الاسهال
  <br>
  اذا كان الاسهال لديك شيئا اساسيا او اذا كنت تعاني من اعراض اخرى غير معروفة السبب، مثل: الارهاق، الم البطن، فقد الوزن، دم مع البراز او اذا استمر الاسهال لديك لمدة اطول من خمسة ايام، يجب ان تزور طبيبك لمناقشة اعراضك. هذا الدليل يقصد به ان يستخدم كمرشد لدى استشارتك الطبيب وليس بديلا للرعاية المقدمة في العيادة.

امامك مجموعة صغيرة من الاسئلة، بخصوص تجربتك مع الاسهال اثناء مضيك قدما في هذا البرنامج. اجاباتك ستقودك تجاه المعلومات الاكثر صلة بحالتك
		<br><br>
من الافضل اعتبار<br>
				"الاسهال الحاد - acute diarrhea" <br>
				و "الاسهال المزمن - chronic diarrhea" <br>
				عرضين منفصلين؛ لانهما لا يشتركان في العديد من الاسباب.

يبدا الاسهال الحاد فجاة ويستبدل نمط التبرز الطبيعي. اذا كنت تعانين من اسهال حاد، قد تعانين من الاعراض لفترة اقل من 3 اسابيع.
يحدث الاسهال المزمن ببطء، يستمر لشهور، لسنوات او يسبب نوبات متكررة من الاسهال.
 <br>
 من اي نوع من اعراض الاسهال تعانين؟
</p>
            
		<div id="demo" class="collapse">

		</div>
   
    <a href="{{ url('/b21') }}">
      <button  id="b1" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo">أعراض الإسهال الحاد <br>(Acute diarrhea) </button></a>
        <br>
      
	  
    <a href="{{ url('/b22') }}">
      <button  id="b1" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo">أعراض الإسهال المزمن <br>(Chronic diarrhea)</button></a>
        
		
	
  </div>
	</div>	
    
@endsection
@extends('layouts.app')

@section('content')





		
<div  id ="parts" class="container text-center">
  <div id="1" class="jumbotron text-center">
	
		<p style="text-align:center; color:black;font-size:25px; font-weight:500; line-height:2rem; " class="flex-wrap py-3">
 الامساك
  <br>


 يمكن ان يكون الامساك نتيجة لمشكلة طبية، ويكون احيانا مفتاحا ذا قيمة لتشخيص مرض لم يتم تشخيصه بعد. احيانا يكون علامة على انك ربما تعانين من مرض عصبي او اصابة.

:من فضلك ضع الاسئلة التالية في الحسبان

 <br>

هل حدثت اعراضك بعض اصابة للظهر او الرقبة؟
<br>
او

هل تم تشخيص اي مرض عصبي عندك (مرض باركنسون، التليف المتعدد او امراض اخرى)؟
او
<br>
هل تعانين من تنميل، ضعف او ارتعاش غير معروف السبب في اي منطقة في جسمك؟

او
<br>
هل حدث عندك تسرب لمحتويات الامعاء او البول الذي لم تكوني قادرة على التحكم فيه؟
</p>
            
		<div id="demo" class="collapse">

		</div>
   
		  <a href="{{ url('/b121') }}">
      <button  id="b1" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo"> واحد أو أكثر من هذه الأمور ينطبق علي</button></a>
        <br>
      
	  
    <a href="{{ url('/b122') }}">
      <button  id="b1" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo">أنا لا أعاني من هذه الأعراض</button></a>
        
	
  </div>
	
    
@endsection
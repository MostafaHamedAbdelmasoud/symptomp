

@extends('layouts.app')

@section('content')





		
<div  id ="parts" class="container text-center">
  <div id="1" class="jumbotron text-center">
	
		<p style="text-align:center; color:black;font-size:25px; font-weight:500; line-height:2rem; " class="flex-wrap py-3">
    جفاف الفم و العطش الشديد
    <br>

	اذا كنت تعاني من جفاف الفم وجفاف العين ايضا، فيمكن انك تعاني من مرض يسمى متلازمة شوغرن (Sjogren's syndrome). السؤال التالي يسال عن مميزات هذا المرض التي تجعله اكثر احتمالا في حالتك.

اضافة الى جفاف العين وجفاف الفم، هل تعاني من واحدة او اكثر من الاتي؟

- تورم الغدة النكفية (parotid gland) - غدة تقع في جانب الوجه اسفل وامام الاذن مباشرة.

- نتائج سلبية لاختبارات انتاج الدموع او اللعاب التي قام بها طبيبك، طبيب العيون او طبيب الانف والاذن والحنجرة عادة. (اذا لم تكن متاكدا انه تم فحص اي من هذه عندك، اسال طبيبك فقط!) هذه الاختبارات، تشمل: اختبار شيرمر (Schirmer's test)، اختبار صبغة وردية - البنغال (Rose-Bengal staining)، اختبار تدفق اللعاب العادي المحفز (basal and stimulated salivary flow) وتحليل عينة من الشفة lip biopsy.

- اجسام مضادة ايجابية (غير طبيعية) في الدم تسمى الاجسام المضادة للمضاد النووي ANA ولا سيما مع نوع من الاجسام المضادة يسمى anti-Ro . مرة اخرى، ان لم تكن متاكدا انك قمت باجراء هذا فحص، اسال طبيبك.
</p>
            
		<div id="demo" class="collapse">

		</div>
   
    <a href="{{ url('/nose2211') }}">
      <button  id="b1" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo">	نعم واحده أو أكثر من هذه الأعراض تنطبق علي</button></a>
        
      <br>
      <br>
    
	
  </div>


		
    
@endsection
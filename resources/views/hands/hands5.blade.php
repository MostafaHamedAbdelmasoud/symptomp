@extends('layouts.app')

@section('content')





		
<div  id ="parts" class="container text-center">
  <div id="1" class="jumbotron text-center">
	
		<p style="text-align:center; color:black;font-size:25px; font-weight:500; line-height:2rem; " class="flex-wrap py-3">
 الم الكتف
  <br>
  هل تعاني من الم شديد في الكتف

تكون الكتف معرضة للالم جزئيا بسبب تشريحها المعقد
وبسبب نطاق حركتها الاكبر من اي مفصل في الجسم وتكون بعض هذه العضلات، او الاوتار، او الاكياس اسبابا شائعة لالم الكتف .حتى عندما يكون المفصل نفسه بحالة جيدة


<br><br>
هل تعانين من الم شديد في الكتف مع الاعراض التالية: · الحمى · الاحمرار · التورم الشديد · عدم القدرة على استخدام المفصل · صدمة حديثة كبيرة (سقوط، او حادث سيارة، ... الخ)؟


 
</p>
            
		<div id="demo" class="collapse">

		</div>
   
    <a href="{{ url('/hands51') }}">
      <button  id="b1" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo">	نعم، واحد، أو أكثر من هذه صحيح </button></a>
        <br>
      
	  
    <a href="{{ url('/hands52') }}">
      <button  id="b1" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo">لا ، أنا لا أعاني من أي من هذه الأعراض</button></a>
        
		
	
  </div>
	</div>	
    
@endsection
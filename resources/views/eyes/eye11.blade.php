

@extends('layouts.app')

@section('content')





		
<div  id ="parts" class="container text-center">
  <div id="1" class="jumbotron text-center">
	
		<p style="text-align:center; color:black;font-size:25px; font-weight:500; line-height:2rem; " class="flex-wrap py-3">
    جفاف العين و الفم
    <br>

	حسنا. اذا كنت تعاني من واحدة او اكثر من هذه، فمن المحتمل انك تعاني من متلازمة شوغرين ، وهي مرض روماتيزمي مرتبط بالتهاب المفاصل الروماتويدي. اضافة الى اعراض الجفاف، ربما يحدث الم في المفاصل، طفح جلدي والتهاب في الرئة.

الان، نوجه لك بعض الاسئلة عن الاسباب الاخرى الممكنة لجفاف العين والفم.

هل ابلغت من قبل انك تعاني من التهاب الجفون؟

الاعراض الشائعة لالتهاب الجفون، تشمل: الاستيقاظ بمخاط في ركن العين، المظهر الدهني لجفن العين، وجود مادة قشرية على الرموش قرب الجفن، الشعور بحبوب عند اغماض العين واحمرار الجفن وتورم.
</p>
            
		<div id="demo" class="collapse">

		</div>
   
    <a href="{{ url('/eye111') }}">
      <button  id="b1" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo">	نعم أعتقد أنني أعناني من إلتهاب جفن العين</button></a>
        
      <br>
      <br>
    
	
  </div>


		
    
@endsection
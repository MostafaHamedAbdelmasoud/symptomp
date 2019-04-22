

@extends('layouts.app')

@section('content')





		
<div  id ="parts" class="container text-center">
  <div id="1" class="jumbotron text-center">
	
		<p style="text-align:center; color:black;font-size:25px; font-weight:500; line-height:2rem; " class="flex-wrap py-3">
    ألم الصدر
    <br>
	الاسباب الاكثر شيوعا لالم الصدر الذي يسوء مع التنفس بعمق (يسمى الم الصدر البلوري) هي: تقلص عضلات جدار الصدر، التهاب المفاصل التي بين الضلوع والعظام الاخرى في منطقة الصدر، اصابة الضلوع، تهيج البطانة التي حول الرئة او القلب والعدوى مثل: التهاب الشعب الهوائية او الالتهاب الرئوي. اقل شيوعا، يكون الم الصدر البلوري بسبب انهيار جزئي في الرئة، بسبب وجود هواء في الصدر خارج الرئتين او جلطات دم في الرئة (انصمام رئوي).

وجود ضيق في التنفس، اضافة الى الم الصدر البلوري، قد يشير الى وجود مشكلة تحتاج الى اهتمام طبي فوري، مثل: وجود هواء في الصدر خارج الرئة او انصمام رئوي.

 

هل تعاني من ضيق في التنفس غير مرتبط بالم الصدر؟
	</p>
            
		<div id="demo" class="collapse">

		</div>
   
        <a href="{{ url('chest1211') }}">

      <button  id="b1" class="btn btn-primary medium" data-toggle="collapse" data-target="#demo">	 نعم أو أنا غير متأكد</button></a>
        
      <br>
      <br>
    
	
  </div>
  @include('layouts.form')

    
@endsection
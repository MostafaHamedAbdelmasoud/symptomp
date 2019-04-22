

@extends('layouts.app')

@section('content')

<div class="col-md-12">

<div class="  text-capitalize text-center my-3">

	<i><h1>{{$diagnosisDescriptionName}}</h1></i>

	@foreach($diagnosisDescriptionss as $diagnosisDescription)


	<div id="_1" class="flex-wrap py-4">
		<p style="text-align:center; color:black;font-size:25px; font-weight:500; line-height:2rem; " class="flex-wrap py-3">{{$diagnosisDescription->description}}
		</p> 


		@if($diagnosisDescriptionName == 'الم الاذن عند الكبار')
		<a href="{{ url('/noses2') }}" style="color:white;">
		<button id="begin" class="btn btn-success">
		لنبدأ
			</button>
			</a>
			
			@endif


		@if($diagnosisDescriptionName == 'السعال والبرد')
		<a href="{{ url('/nose3') }}" style="color:white;">
		<button id="begin" class="btn btn-success">
		لنبدأ
			</button>
			</a>
			
			@endif




		@if($diagnosisDescriptionName == 'جفاف الفم والعطش الشديد')
		<a href="{{ url('/nose2') }}" style="color:white;">
		<button id="begin" class="btn btn-success">
		لنبدأ

			</button>
			</a>
			
			@endif
		

	</div>
	@endforeach




<div class="text-left" class="btn btn-danger">

<a href="{{ URL::previous() }}
		 " class="btn btn-default btn-lg">
	<span><i class="fas fa-arrow-left"></i></span>
	إبدأ تشخيص جديد</a>  
</div>

<!-- for container -->
</div>
</div>
@endsection




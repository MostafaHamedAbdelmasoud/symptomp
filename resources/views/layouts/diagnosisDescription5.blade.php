

@extends('layouts.app')

@section('content')

<div class="col-md-12">

<div class="  text-capitalize text-center my-3">

	<i><h1>{{$diagnosisDescriptionName}}</h1></i>

	@foreach($diagnosisDescriptionss as $diagnosisDescription)


	<div id="_1" class="flex-wrap py-4">
		<p style="text-align:center; color:black;font-size:25px; font-weight:500; line-height:2rem; " class="flex-wrap py-3">{{$diagnosisDescription->description}}
		</p> 


		@if($diagnosisDescriptionName == 'المرفق')
		<a href="{{ url('/hands1') }}" style="color:white;">
		<button id="begin" class="btn btn-success">
		لنبدأ
			</button>
			</a>
			
			@endif




		@if($diagnosisDescriptionName == 'مشاكل الأظافر')
		<a href="{{ url('/hands3') }}" style="color:white;">
		<button id="begin" class="btn btn-success">
		لنبدأ

			</button>
			</a>
			
			@endif
		@if($diagnosisDescriptionName == 'اليد')
		<a href="{{ url('/hands2') }}" style="color:white;">
		<button id="begin" class="btn btn-success">
		لنبدأ

			</button>
			</a>
			
			@endif
		@if($diagnosisDescriptionName == 'ألم الكتف')
		<a href="{{ url('/hands5') }}" style="color:white;">
		<button id="begin" class="btn btn-success">
		لنبدأ

			</button>
			</a>
			
			@endif
		@if($diagnosisDescriptionName == 'عامل روماتويدي إيجابي')
		<a href="{{ url('/hands4') }}" style="color:white;">
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




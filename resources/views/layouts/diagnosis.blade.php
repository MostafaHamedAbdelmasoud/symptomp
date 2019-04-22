

@extends('layouts.app')

@section('content')

<div class="col-md-12">

<div class="text-left" class="btn btn-danger">

<a href="{{ URL('/home') }}
" class="btn btn-default btn-lg">
<span><i class="fas fa-arrow-left"></i></span>
تشخيص جديد</a>  
</div>


<div class=" text-capitalize text-center my-4">


<table class="table">


<i><h1 class="pb-3">{{$diagnosisName}}</h1></i>



   
@foreach($diagnosis as $diagnosiss)


    
    
@if($diagnosisName == "العين")

<tr><td><a href="{{url('/diagnosisdescription2'.'/'.$diagnosisanalysisNameEyes=$diagnosiss->name)}}"  class="btn btn-info">{{$diagnosiss->name}}</a></td></tr>


@endif

    
@if($diagnosisName == "أنف و أذن و حنجرة")

<tr><td><a href="{{url('/diagnosisdescription3'.'/'.$diagnosisanalysisNameNose=$diagnosiss->name)}}"  class="btn btn-info">{{$diagnosiss->name}}</a></td></tr>


@endif

    
@if($diagnosisName == "الصدر والظهر")

<tr><td><a href="{{url('/diagnosisdescription4'.'/'.$diagnosisanalysisNameChest=$diagnosiss->name)}}"  class="btn btn-info">{{$diagnosiss->name}}</a></td></tr>


@endif
@if($diagnosisName == "الذراعين واليدين")

<tr><td><a href="{{url('/diagnosisdescription5'.'/'.$diagnosisanalysisNameElbow=$diagnosiss->name)}}"  class="btn btn-info">{{$diagnosiss->name}}</a></td></tr>


@endif
@if($diagnosisName == "الساقين")

<tr><td><a href="{{url('/diagnosisdescription6'.'/'.$diagnosisanalysisNameLegs=$diagnosiss->name)}}"  class="btn btn-info">{{$diagnosiss->name}}</a></td></tr>


@endif
@if($diagnosisName == "البطن و الحوض")

<tr><td><a href="{{url('/diagnosisdescription'.'/'.$diagnosisanalysisNameLegs=$diagnosiss->name)}}"  class="btn btn-info">{{$diagnosiss->name}}</a></td></tr>


@endif
    
    @endforeach

    

    </table>


</div>




<div class="text-left" class="  pb-4">

<a href="{{ URL::previous() }}
" class="btn btn-danger btn-lg ">
<span><i class="fas fa-arrow-left"></i></span>
رجوع</a>  
</div>


</div>

@endsection

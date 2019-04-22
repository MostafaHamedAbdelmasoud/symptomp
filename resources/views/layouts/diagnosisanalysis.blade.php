

@extends('layouts.app')

@section('content')



<div class="text-left" class="btn btn-danger">

<a href="{{ URL('/home') }}
" class="btn btn-default btn-lg">
<span><i class="fas fa-arrow-left"></i></span>
تشخيص جديد</a>  
</div>

<div class="container text-capitalize text-center my-4">

<h3 class="pb-3">أختر جزء من الجسم</h3>

<table class="table">
<!-- 
$uniques = array();
foreach ($countries as $c) {
    $uniques[$c->code] = $c; // Get unique country by code.
}

dd($uniques); -->



@foreach($symptoms as $symptom)
    <tr><td><a href="{{url('/diagnosis'.'/'.$diagnosisanalysis=$symptom->tag)}}" class="btn btn-info">{{$symptom->tag}}</a></td></tr>
    @endforeach
    
</table>
</div>




<div class="text-left" >

<a href="{{ URL::previous() }}
" class="btn btn-danger btn-lg">
<span><i class="fas fa-arrow-left"></i></span>
رجوع</a>  
</div>




@endsection

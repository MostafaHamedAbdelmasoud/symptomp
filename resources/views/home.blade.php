
 
    @if (Auth::guest()==true)
    {
            return view('auth.login');
        }
        @endif


@extends('layouts.app')

@section('content')




<div class="container">
    <div class="row justify-content-center">
       

    <div id='jumbotron' class="jumbotron text-center text-capitalize">


    <h1>
         <i>medical consultant</i>        أهلا بك في 
</h1>
    <br>
    
<i>
    <a  id='signUp'  style="font-size:28px; padding:10px;"  aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                </i>
</div>

<hr>



<div id='gender' class="container">
<table class="table table-bordered text-right  text-capitalize">
    <tr>
        <th>
            
         أجب على الأسئلة المطلوبة
          
         -1
         </th>
        <th>
        2- احصل على التشخيص في ثوان قليلة فقط        	</th>
    </tr>

</table>

</div>

<div class="container text-center itemsc" >
    <i>

    <h3 class="text-capitalize d-block ">لنبدأ مشخص الأعراض</h3>

    </i>
<br>

<a href="{{url('/diagnosisanalysis')}}" class="btn btn-outline-primary btn-lg text-capitalize" style="margin: 5px" role='button' name="gender">لنبدأ</a>



</div>





    </div>
</div>
@endsection

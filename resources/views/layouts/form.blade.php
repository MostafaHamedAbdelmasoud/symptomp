


<form class="" method="POST" action="{{url('/contact')}}">
@csrf

<div class="form-group">
    <label for="name">الإسم</label>
    <input type="text"  class="form-control"  name="name" placeholder="أدخل إسمك" >


</div>
    
<div class="form-group">
    <label for="age">العمر</label>
    <input type="number"  class="form-control" id="" aria-describedby="" name="age" placeholder="أدخل عمرك" >


</div>
    
<div class="form-group">
    <label for="email">البريد الإلكتروني</label>
    <input type="email" class="form-control" id="" aria-describedby="" name="email" placeholder="أدخل بريدك الإلكتروني" >
 

</div>

<button  class="btn btn-outline-primary my-3 " type="submit">

أرسل
			</button><br>

</form>






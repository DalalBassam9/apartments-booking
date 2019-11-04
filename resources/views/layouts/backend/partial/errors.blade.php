@foreach($errors->all() as $error)
<div class="alert alert-danger" role="alert">
   <button type="button" class="close" data-dismiss="alert">×</button> 
   <strong>  {{$error}}</strong>
</div>
@endforeach

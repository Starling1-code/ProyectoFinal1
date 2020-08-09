<form action="{{url('/trailers')}}" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}
   <label for="nombre">{{'Nombre'}}</label>
    <input type="text" name="Nombre" id="nombre" value="">
<input type="submit" value="Agregar">
</form>

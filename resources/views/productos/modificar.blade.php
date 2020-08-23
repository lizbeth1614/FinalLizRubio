<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>

      <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<div class="container bootstrap snipets">
    <h1 class="text-center text-muted">Editar productos</h1>
    <div class="row flow-offset-1">
<form method="post" action="{{url('/productos/'.$datos->id)}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
<label for="Producto">{{'Producto'}}</label>
<input type="text" class="form-control"name="Producto" value="{{$datos->Producto}}" id="Producto"><br>

<label for="Descripcion">{{'Descripcion'}}</label>
<input type="text"class="form-control" name="Descripcion" value="{{$datos->Descripcion}}" id="Descripcion"><br>


<label for="precio">{{'precio'}}</label>
<input type="text"class="form-control" name="precio" value="{{$datos->precio}}" id="precio"><br>


<label for="imagen">{{'imagen'}}</label>
<img class="img-fluid" src="{{ asset('/uploads').'/'.$datos->imagen}}" alt="foto">
<input type="file"class="form-control" name="imagen" value="{{$datos->imagen}}" id="imagen">

<input type="submit" class="btn btn-danger" value="editar">
</form>
</html>

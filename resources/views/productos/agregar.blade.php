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
    <h1 class="text-center text-muted">Agregar productos</h1>
    <div class="row flow-offset-1">
<form method="post" action="{{url('/productos')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
<label for="Producto">{{'Producto'}}</label>
<input type="text" class="form-control"name="Producto" id="Producto">

<label for="Descripcion">{{'Descripcion'}}</label>
<input type="text" class="form-control"name="Descripcion" id="Descripcion">


<label for="precio">{{'precio'}}</label>
<input type="text" class="form-control"name="precio" id="precio">


<label for="imagen">{{'imagen'}}</label>
<input type="file"class="form-control" name="imagen" id="imagen">


<input type="submit" value="Agregar">
</form>
</html>

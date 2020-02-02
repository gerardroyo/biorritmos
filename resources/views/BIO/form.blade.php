@extends('layouts.master')
@section('pageTitle', 'Pàgina Index')

@section('header')

<h3>La naturaleza y todo lo que ella comprende: clima, estaciones, reproducción de los
animales, cosechas, etc., se rigen por ciclos biológicos o ritmos. Existen diferentes
biorritmos que afectan nuestro comportamiento en distintas maneras. Se ha
comprobado estadísticamente que la energía física se comporta cíclicamente en
periodos de 23 días, la energía emotiva en periodos 28 días y la energía intelectual en
33 días. Al momento de nacer, cada ciclo comienza desde cero y empieza a subir en
una fase positiva, durante la cual las energías y las capacidades son altas
</h3>
@endsection

@section('content')

<form action="store" method="get">
  <div class="form-group">
    <label for="exampleInputEmail1">Tu nombre</label>
    <input type="text" class="form-control" id="name" placeholder="Nombre">
    <small id="emailHelp" class="form-text text-muted">No guardaremos tu información en nuestra base de datos.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Fecha de nacimiento</label>
    <input type="text" class="form-control" id="fecha" placeholder="dd/mm/aaaa">
  </div>
  <button type="submit" class="btn btn-primary">Calcular</button>
</form>

@endsection

@section('footer')
<h3></h3>
@endsection
@extends('layouts.master')
@section('pageTitle', 'Pàgina Index')

@section('header')

<h1>Bienvenido al calculador de tu Biorritmo</h1>
@endsection

@section('content')

<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Tu nombre</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre">
    <small id="emailHelp" class="form-text text-muted">No guardaremos tu información en nuestra base de datos.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Fecha de nacimiento</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="dd/mm/aaaa">
  </div>
  <button type="submit" class="btn btn-primary">Calcular</button>
</form>

@endsection

@section('footer')
<h3></h3>
@endsection
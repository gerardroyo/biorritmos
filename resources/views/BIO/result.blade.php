@extends('layouts.master')
@section('pageTitle', 'Pàgina Index')

@section('header')

<h3>Usiario: </h3>
<h3>Fecha de nacimiento: </h3>
@endsection

@section('content')

<p>Físico:</p>
<div class="progress">
    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: {{$**fisico**}}%" aria-valuenow=o aria-valuemin="0" aria-valuemax="100"></div>
</div>

<p>Emotivo:</p>
<div class="progress">
    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: {{$**emotivo**}}%" aria-valuenow=o aria-valuemin="0" aria-valuemax="100"></div>
</div>

<p>Intelectual:</p>
<div class="progress">
    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: {{$**intelectual**}}%" aria-valuenow=o aria-valuemin="0" aria-valuemax="100"></div>
</div>

@endsection

@section('footer')
<h3></h3>
@endsection
@extends('layouts.master')

@section('titlePage', 'Resultat del càlcul')

@section('header')
    <h4>Usuario: {{$nombre}}</h4>
    <h4>Fecha de nacimiento: {{$date}}</h4>

@endsection

@section('content')
    <p>Físico: {{$FisiBarra}}%</p>
    <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: {{$fisico}}%" aria-valuenow=o aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <p>Emotivo: {{$EmoBarra}}%</p>
    <div class="progress">
        <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated" role="progressbar" style="width: {{$emocional}}%" aria-valuenow=o aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <p>Intelectual: {{$IntelBarra}}%</p>
    <div class="progress">
        <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated" role="progressbar" style="width: {{$intelectual}}%" aria-valuenow=o aria-valuemin="0" aria-valuemax="100"></div>
    </div>

@endsection

@section('footer')

@endsection
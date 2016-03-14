@extends('layouts.default')

@section('header')
    @include('includes.header')
@stop
@section('content')
    <div class="page-title wrapper disciplina-title">
        <span>Escolha a disciplina:</span>
    </div>
    <div class="container-fluid materias-container">
        <div class="col-sm-12 col-xs-12">
            @foreach($materias as $materia)
                <div class="col-sm-6 col-xs-6">
                    <a href='{!! route('materia', $materia['id']) !!}'>
                        {!! Html::image($materia['img'], $materia['nome'], array('id' => 'btn-materia', 'class' => 'img-btn')) !!}
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@stop

@extends('layouts.default')

@section('header')
	@include('includes.header-atividade')
@stop
@section('content')
	@foreach($subatividades as $subatividade)
		{!! Form::open(array('url' => '/atividade')) !!}
		{!! Form::hidden('erros', '', ['id' => 'erros']) !!}
		{!! Form::hidden('acertos', '', ['id' => 'acertos']) !!}
		{!! Form::hidden('subatividade-id', $subatividade->id, ['id' => 'subatividade-id']) !!}
		<div  class="subatividade hidden" id="subatividade{!! $subatividade->id !!}">
			<div class="page-title wrapper disciplina-title">
				<span>{!! $subatividade->nome !!}</span>
			</div>
			<div class="container-fluid materias-container">
				<div class="col-sm-12 col-xs-12">
				</div>
			</div>
			<div class="container-fluid materias-container">
				<div class="col-sm-6 col-xs-6">
					@include('includes.' . $materia->url . '.' . $subatividade->url)
				</div>
			</div>
		</div>
		{!! Form::close() !!}
	@endforeach
@stop
@include('includes.scripts')
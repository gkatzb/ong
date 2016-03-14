@extends('layouts.default')

@section('header')
	@include('includes.header-atividade')
@stop
@section('content')
	@foreach($subatividades as $subatividade)
		<div id="sound" class='hidden'></div>
		{!! Form::open(['id' => 'frm_atividade', 'url' => route('atividade', $atividade->id), 'class' => "subatividade hidden", 'id' => 'subatividade'.$subatividade->id]) !!}
		<div  >
			<div class="page-title wrapper disciplina-title">
				<span>{!! $subatividade->nome !!}</span>
			</div>
			<div class="form-group container">
				@include('includes.' . $materia->url . '.' . $subatividade->url)
			</div>
			<div class="form-group">
				<div class="text-left col-sm-6">
					<button class="text-left btn btn-info btn-lg-6 btn-atividade" id="btn-voltar">Voltar</button>
				</div>
				<div class="text-right col-sm-6">
					<button class="text-right btn btn-info btn-lg-6 btn-atividade" id="btn-atividade next">Próximo</button>
				</div>
			</div>
		</div>
		{!! Form::close() !!}
	@endforeach
@stop
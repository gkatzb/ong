@extends('layouts.default')

@section('header')
	@include('includes.header-atividade')
@stop
@section('content')
	@foreach($subatividades as $key => $subatividade)
		<div class="subatvd-content">
			<div id="sound" class='hidden'></div>
			{!! Form::open(['id' => 'frm_atividade'.$subatividade->id, 'url' => route('atividade', $subatividade->id), 'id' => 'subatividade'.$subatividade->id]) !!}
			{!! csrf_field() !!}
			{!! Form::hidden('hdn_subatividade_id', $subatividade->id, ['id' => 'hdn_subatividade_id']) !!}
			{!! Form::hidden('erros', '0', ['id' => 'erros']) !!}
			{!! Form::hidden('acertos', '0', ['id' => 'acertos']) !!}
			{!! Form::close() !!}
			<div class="subatividade hidden">
				<div class="page-title wrapper disciplina-title">
					<span>{!! $subatividade->nome !!}</span>
				</div>
				<div class="form-group container">
					@include('includes.' . $materia[0]->url . '.' . $subatividade->url)
				</div>
				<div class="form-group">
					<div class="text-left col-sm-6">
						<button class="text-left btn btn-info btn-lg-6 btn-atividade" id="btn-prev">Voltar</button>
					</div>
					<div class="text-right col-sm-6">
						<button type="" class="text-right btn btn-info btn-lg-6 btn-atividade" id="btn-atividade">Próximo</button>
					</div>
				</div>
			</div>
		</div>
	@endforeach
@stop
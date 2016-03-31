@extends('layouts.default')

@section('header')
	@include('includes.header-atividade')
@stop
@section('content')
	<div class="subatvd-content">
		@foreach($subatividades as $key => $subatividade)
			<div id="sound" class='hidden'></div>
			{!! Form::open(['id' => 'frm_atividade'.$subatividade->id, 'url' => route('atividade', $subatividade->id), 'id' => 'subatividade'.$subatividade->id]) !!}
			{!! csrf_field() !!}
			{!! Form::hidden('_token', csrf_token(), ['id' => '_token']) !!}
			{!! Form::hidden('hdn_subatividade_id-'.$subatividade->id, $subatividade->id, ['id' => 'hdn_subatividade_id-'.$subatividade->id]) !!}
			{!! Form::hidden('erros-'.$subatividade->id, '0', ['id' => 'erros-'.$subatividade->id]) !!}
			{!! Form::hidden('acertos-'.$subatividade->id, '0', ['id' => 'acertos-'.$subatividade->id]) !!}
			{!! Form::close() !!}
			<div class="subatividade hidden subatividade-{!! $subatividade->id !!}">
				<div class="page-title wrapper disciplina-title">
					<span>{!! $subatividade->nome !!}</span>
				</div>
				<div class="form-group container">
					@include('includes.' . $materia[0]->url . '.' . $subatividade->url)
				</div>
				<div class="form-group">
					<div class="text-left col-sm-6">
						<button class="text-left btn btn-info btn-lg-6 btn-atividade" id="btn-prev-{!! $subatividade->id !!}">Voltar</button>
					</div>
					<div class="text-right col-sm-6">
						<button type="" class="text-right btn btn-info btn-lg-6 btn-atividade btn-atividade-{!! $subatividade->id !!}" id="btn-subatividade-{!! $subatividade->id !!}">Próximo</button>
					</div>
				</div>
			</div>
		@endforeach
	</div>
@stop
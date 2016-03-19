@extends('layouts.default')

@section('header')
	@include('includes.header')
@stop
@section('content')
	<div class="page-title wrapper disciplina-title">
		<span>{!! $materia['nome'] !!}</span>
	</div>
	<div class="container-fluid materias-container">
		@if(isset($errors))
			@foreach($errors->all() as $error)
				<p class="alert alert-danger">{!!$error!!}</p>
			@endforeach
		@endif
		<div class="col-sm-12 col-xs-12">
			@foreach($atividades as $atividade)
				<div class="col-sm-6 col-xs-6">
					<a href='{!! route('atividade', $atividade->id) !!}'>
						{!! Html::image($atividade->img, $atividade->nome, ['class' => 'img-btn']) !!}
					</a>
				</div>
			@endforeach
		</div>
	</div>
	<div class="container-fluid materias-container page-footer">
		<div class="text-center col-sm-12">
			<a href="{!! route('home', $user->id) !!}" class="text-center btn btn-info btn-lg-6 btn-atividade" id="btn-prev">Home</a>
		</div>
	</div>
@stop

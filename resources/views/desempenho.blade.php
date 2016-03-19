@extends('layouts.default')

@section('header')
	@include('includes.header-atividade')
@stop
@section('content')
		<div  class="subatividade">
			<div class="page-title wrapper disciplina-title">
				<span>Seu desempenho:</span>
			</div>
			<div class="container-fluid materias-container">
				<div class="col-sm-12 col-xs-12">
				</div>
			</div>
			<div class="page-title wrapper col-sm-12 text-center">
				<div class="col-sm-6 col-xs-6">
					<span>Acertos: {!! $desempenho->acertos !!}</span>
				</div>
				<div class="col-sm-6 col-xs-6">
					<span>Erros: {!! $desempenho->erros !!}</span>
				</div>
			</div>
			<div class="container-fluid col-sm-12 text-center">
				<a href="{!! route('home', $userId) !!}" class="btn btn-info btn-md-6 btn-atividade" id="btn-home">Home</a>
			</div>
		</div>
@stop
@include('includes.scripts')
<script>
	$('#btn-home').on('click', function(){
		window.location.href = 'home';
	});
</script>
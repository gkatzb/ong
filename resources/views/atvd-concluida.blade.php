@extends('layouts.default')

@section('header')
	@include('includes.header-atividade')
@stop
@section('content')
		<div  class="subatividade">
			<div class="page-title wrapper disciplina-title">
				<span>{!! $message !!}</span>
			</div>
		</div>
		<div class="container-fluid col-sm-12 text-center">
			<a href="{!! route('home', $userId) !!}" class="btn btn-info btn-md-6 btn-atividade" id="btn-home">Home</a>
		</div>
@stop
@include('includes.scripts')
<script>
	$('#btn-home').on('click', function(){
		window.location.href = 'home';
	});
</script>
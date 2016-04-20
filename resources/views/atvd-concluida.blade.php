@extends('layouts.default')

@section('header')
	@include('includes.header')
@stop
{!! Html::image('/assets/img/desemp.jpg', 'ONG', ['class' => 'desemp-background']) !!}
@section('content')
	<div  class="subatividade">
		<div class="page-title wrapper disciplina-title desemp-message">
			<div class="row">
				<span>{!! $message !!}</span>
			</div>
			<div class="row">
				<br/>
				<a href="{!! route('home', $userId) !!}" class="btn btn-info btn-md-6 btn-atividade" id="btn-home">Home</a>
			</div>
		</div>
	</div>
@stop
@include('includes.scripts')
<script>
	$('#btn-home').on('click', function(){
		window.location.href = 'home';
	});
</script>
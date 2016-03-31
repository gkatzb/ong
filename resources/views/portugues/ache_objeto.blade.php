@extends('layouts.default')

@section('header')
	@include('includes.header-atividade')
@stop
@section('content')
	@foreach($subatividades as $subatividade)
		<div id="subatividade{!! $subatividade->id !!}">
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
	@endforeach
@stop
@include('includes.scripts')
<script>
	$(document).ready(function () {
		var erros = 0;
		var acertos = 0;
		//if( $('.subatividade').attr('id') < $('.subatividade').attr('id') + 1 );
		$('.subatividade').first().removeClass('hidden');
		$('.img-atividade').on('click', function () {
			if ($(this).attr('alt').substr(0, 1, $(this).attr('alt').length) == 'a') {
				if(acertos < 4){
					$("#acertos").val(acertos++ + 1);
				}
				console.log(acertos+ " | " + $("#acertos").val());
				swal("Parabéns, resposta certa!", "", "success");
				playSound('claps');
				$(this).next('span').addClass('acerto');
			} else {
				$("#erros").val(erros++ + 1);
				console.log(erros+ " | " + $("#erros").val());
				swal("Ops... Resposta errada!", "", "warning");
				playSound('wrong');
				$(this).next('span').addClass('erro');
			}
			$(this).unbind('click');
			$(this).attr('disabled', true);
		});

		$('#btn-atividade').on('click', function(){
			if(acertos < 4){
				swal("Ops... Você ainda não encontrou todos!", "", "warning");
				playSound('wrong');
			} else {
				$("#subatividade"+$("#hdn_subatividade_id").val()).submit();
			}
		});

		$('#btn-prev').on('click', function(){
			window.location.href = document.referrer;
		});
	});
</script>
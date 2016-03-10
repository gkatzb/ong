@extends('layouts.materias')

@section('content_materia')
	<div class="page-title wrapper disciplina-title">
		<span>Escolha a disciplina:</span>
	</div>
	<div class="container-fluid materias-container">
		<div class="col-sm-12 col-xs-12">
			<div class="col-sm-6 col-xs-6">
				{!! Html::image('/assets/img/portugues.png', 'portugues', array('id' => 'btn_materia', 'class' => 'materia-img')) !!}
			</div>
			<div class="col-sm-6 col-xs-6">
				{!! Html::image('/assets/img/matematica.png', 'matematica', array('id' => 'btn_materia', 'class' => 'materia-img')) !!}
			</div>
		</div>
	</div>
@stop

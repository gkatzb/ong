@extends('layouts.default')
@section('content')
	<div class="container text-center">
		<div class="home-img col-sm-12 col-xs-12 center">
			{!! Html::image('/assets/img/home.png', 'ONG', array('class' => 'col-lg-12 col-xs-12')) !!}
		</div>
		<div class="home-login col-sm-12 col-xs-12">
			<div class="col-sm-6 col-xs-6">
				{!! Form::submit('login', array('class' => 'btn btn-lg btn-md btn-success btn-login')) !!}
			</div>
			<div class="col-sm-6 col-xs-6">
					{!! Form::submit('cadastrar', array('class' => 'btn btn-lg btn-md btn-success btn-cadastro')) !!}
			</div>
		</div>
	</div>
@stop

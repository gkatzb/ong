@extends('layouts.default')
@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="home-img-container">
				{!! Html::image('/assets/img/home.png', 'ONG', array('class' => 'home-image')) !!}
			</div>
		</div>
		<div class="row">
			<div class="login-container">
				<div id="output"></div>
				<div class="login-title">Login</div>
				<div class="form-box">
					{!! Form::open(array('url' => '/materias')) !!}
						<div class="form-group">
							<input name="user" type="text" placeholder="Usuário">
							<input name="password" type="password" required placeholder="Senha">
						</div>
						<div class="form-group">
							<button class="btn btn-info btn-md-6 login" type="submit">Entrar</button>
							<button id="btn_cadastrar" class="btn btn-info btn-md-6 cadastro">Cadastrar</button>
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@stop

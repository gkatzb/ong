@extends('layouts.default')

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="home-img-container">
				{!! Html::image('/assets/img/home.png', 'ONG', array('class' => 'home-image')) !!}
			</div>
		</div>
		<div class="row">
			<div class="error-message error-login">
				@if (count($errors) > 0)
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
			</div>
			<div class="login-container">
				<div id="output"></div>
				<div class="login-title">Login</div>
				<div class="cadastro-title hidden">Cadastro</div>
				<div class="form-box form-login">
					{!! Form::open(array('url' => '/login')) !!}
						<div class="form-group">
							{!! csrf_field() !!}
							<input name="type" type="hidden" value="login">
							<input name="user" type="text" placeholder="Usuário">
							<input name="password" type="password" required placeholder="Senha">
						</div>
						<div class="form-group">
							<button class="btn btn-info btn-md-6 login" type="submit">Entrar</button>
							<a id="btn_cadastrar" class="btn btn-info btn-md-6 cadastro">Cadastrar</a>
						</div>
					{!! Form::close() !!}

				</div>
				<div class="form-box form-cadastro hidden">
					{!! Form::open(array('url' => '/login')) !!}
					<div class="form-group">
						{!! csrf_field() !!}
						<input name="type" type="hidden" value="cadastro">
						<input name="user" type="text" placeholder="Usuário">
						<input name="password" type="password" required placeholder="Senha">
					</div>
					<div class="form-group">
						<button class="btn btn-info btn-md-6 login" type="submit">Cadastrar</button>
					</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@stop
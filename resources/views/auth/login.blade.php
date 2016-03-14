@extends('layouts.default')


@section('content')
    <div class="row">
        <div class="home-img-container">
            {!! Html::image('/assets/img/home.png', 'ONG', array('class' => 'home-image')) !!}
        </div>
    </div>

    <div class="login-container">
        <div id="output"></div>
        <div class="login-title">Acessar</div>
        <div class="cadastro-title hidden">Cadastrar</div>
        <div class="form-box form-login">
            {!! Form::open(array('url' => '/login')) !!}
            <div class="form-group">
                {!! csrf_field() !!}
                <input name="type" type="hidden" value="login">
                <input name="login" type="text" placeholder="Usuário">
            </div>
            <div class="form-group">
                <button class="btn btn-info btn-md-6 btn-login" type="submit">Entrar</button>
                <a id="btn-cadastrar" class="btn btn-info btn-md-6 btn-login">Cadastrar</a>
            </div>
            {!! Form::close() !!}

        </div>
        <div class="form-box form-cadastro hidden">
            {!! Form::open(array('url' => '/cadastrar')) !!}
            <div class="form-group">
                {!! csrf_field() !!}
                <input name="type" type="hidden" value="cadastro">
                <input name="nome" type="text" placeholder="Nome">
                <input name="login" type="text" placeholder="Usuário">
            </div>
            <div class="form-group">
                <button class="btn btn-info btn-md-6 btn-login" type="submit">Cadastrar</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop

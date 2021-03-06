<?php
/**
* Created by PhpStorm.
* User: Gabriela Katz
* Date: 26/02/2016
*/
?>
<div class="col-sm-12 col-xs-12 navbar-right text-right login-logout">
@if(Auth::guest())
    <li class="pull-right">
        {!! Html::link('login', 'Entrar', ['class' => "btn btn-lg btn-success"]) !!}
    </li>
@else
    <div class="pull-right logout">
        {{ Auth::user()->name }}
        <span class="user-name-header">Olá, {!! $user->login !!}!</span>
        @if(isset($atvdConcluida) && $atvdConcluida)
            <a href="{!! route('relatorio', ['atividade_id' => $atividade->id, 'date_ini' => $date_ini, 'date_fim' => $date_fim]) !!}" class="btn btn-lg btn-info">Gerar Relatório</a>
        @endif
        {!! Html::link('logout', 'Sair', ['class' => "btn btn-lg btn-danger"]) !!}
    </div>
@endif
</div>
<div class="container">
    <div class="col-sm-6 col-xs-6 navbar-left text-left">
        {!! Html::image('/assets/img/header-1.png', 'ONG', ['class' => 'header-img-logo']) !!}
    </div>
    <div class="col-sm-6 col-xs-6 navbar-right text-right">
        {!! Html::image('/assets/img/header-2.png', 'ONG', ['class' => 'header-img-children']) !!}
    </div>
</div>
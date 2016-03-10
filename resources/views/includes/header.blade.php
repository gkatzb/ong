<?php
/**
* Created by PhpStorm.
* User: Gabriela Katz
* Date: 26/02/2016
*/
?>
<div class="col-sm-12 col-xs-12 navbar-right text-right">
@if(Auth::guest())
    <li class="pull-right">
        <a href="{{ route('login') }}">login</a>
    </li>
@else
    <div class="pull-right logout">
        {{ Auth::user()->name }}
        <button href="{{ route('home') }}" class="btn-xs btn-danger">Sair</button>
    </div>
@endif
</div>
<div class="col-sm-6 col-xs-6 navbar-left text-left">
    {!! Html::image('/assets/img/logo.png', 'ONG', array('class' => 'header-img-logo')) !!}
</div>
<div class="col-sm-6 col-xs-6 navbar-right text-right">
    {!! Html::image('/assets/img/children.png', 'ONG', array('class' => 'header-img-children')) !!}
</div>
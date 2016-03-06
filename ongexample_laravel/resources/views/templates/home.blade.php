<?php
/**
* Created by PhpStorm.
* User: Gabriela Katz
* Date: 26/02/2016
*/
?>
@extends('templates.header')
@yield('css')
@yield('header')
<div class="container text-center">
	<div class="col-lg-12 col-xs-12">
		{!! Html::image("/assets/img/home.png", 'logo', array('class' => 'logo')) !!}
	</div>
	<div class="col-lg-12 text-center login">
		{!! Form::input('btn_login', 'btn_login', array('class' => 'btn btn-success')) !!}
	</div>
</div>
@yield('footer')
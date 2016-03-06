<?php
/**
 * Created by PhpStorm.
 * User: Gabriela Katz
 * Date: 26/02/2016
 */
?>

<!DOCTYPE html>
<html>
    @section('css')
        {{ Html::style('/assets/css/style.css') }}
        {{ Html::style('/assets/css/bootstrap.min.css') }}
    @stop

    @section('script')
        {{ Html::script('https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js') }}
        {{ Html::script('/assets/js/main.js') }}
    @stop
</html>
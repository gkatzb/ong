<?php
/**
 * Created by PhpStorm.
 * User: Gabriela Katz
 * Date: 26/02/2016
 */
?>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="container">
    <header>
        @yield('header')
    </header>
    <div id="main">
        <div class="row">
            <div class="container-fluid content-home">
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
                @yield('content')
            </div>
        </div>
    </div>
    <footer class="footer">
        {{--@include('includes.footer')--}}
    </footer>
</div>
</body>
</html>
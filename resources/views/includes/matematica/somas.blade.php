<div class="container-fluid materias-container text-uppercase">
    <div class="col-sm-12 col-xs-12">
        <div class="col-sm-6 col-xs-6">
            &nbsp;
            {!! Html::image('/assets/img/matematica/chapeu.png', 'chapeu', ['class' => 'img-soma 7']) !!}
        </div>
        <div class="col-sm-6 col-xs-6">
            &nbsp;<span class="span-sum">=</span>&nbsp;
            <input class="7 resp-soma numeric" maxlength="3" id="7" />
        </div>
        <div class="check-img col-sm-1 col-xs-1">
            <i class="hidden icon-atv-check icon-atv-check-7 fa fa-check fa-3x margin-bottom"></i>
            <i class="hidden icon-atv-error icon-atv-error-7 fa fa-times fa-3x margin-bottom"></i>
        </div>
    </div>
    <div class="div-soma col-sm-12 col-xs-12">
        <div class="check-img col-sm-1 col-xs-1">
            <i class="hidden icon-atv-check icon-atv-check-8 fa fa-check fa-3x margin-bottom"></i>
            <i class="hidden icon-atv-error icon-atv-error-8 fa fa-times fa-3x margin-bottom"></i>
        </div>
        <div class="inner-sum col-sm-6 col-xs-6">
            &nbsp;
            <input class="3 input-soma input-soma1 numeric" maxlength="3" id="3" />&nbsp;<span class="span-sum-symbol">+</span>
            <input class="4 input-soma input-soma2 numeric" maxlength="3" id="4" />
        </div>
        <div class="col-sm-6 col-xs-6">
            &nbsp;<span class="span-sum">=</span>&nbsp;
            <input class="7 resp-soma numeric" maxlength="3" id="7" />
        </div>
        <div class="check-img col-sm-1 col-xs-1">
            <i class="hidden icon-atv-check icon-atv-check-7 fa fa-check fa-3x margin-bottom"></i>
            <i class="hidden icon-atv-error icon-atv-error-7 fa fa-times fa-3x margin-bottom"></i>
        </div>
    </div>
    <div class="col-sm-12 col-xs-12">
        <div class="col-sm-6 col-xs-6">
            &nbsp;
            {!! Html::image('/assets/img/matematica/cadeira.png', 'cadeira', ['class' => 'img-soma 9']) !!}
        </div>
        <div class="col-sm-6 col-xs-6">
            &nbsp;<span class="span-sum">=</span>&nbsp;
            <input class="9 resp-soma numeric" maxlength="3" id="9" />
        </div>
        <div class="check-img col-sm-1 col-xs-1">
            <i class="hidden icon-atv-check icon-atv-check-9 fa fa-check fa-3x margin-bottom"></i>
            <i class="hidden icon-atv-error icon-atv-error-9 fa fa-times fa-3x margin-bottom"></i>
        </div>
    </div>
    <div class="div-soma col-sm-12 col-xs-12">
        <div class="check-img col-sm-1 col-xs-1">
            <i class="hidden icon-atv-check icon-atv-check-8 fa fa-check fa-3x margin-bottom"></i>
            <i class="hidden icon-atv-error icon-atv-error-8 fa fa-times fa-3x margin-bottom"></i>
        </div>
        <div class="inner-sum col-sm-6 col-xs-6">
            &nbsp;
            <input class="6 input-soma input-soma1 numeric" maxlength="3" id="6" />&nbsp;<span class="span-sum-symbol">+</span>
            <input class="3 input-soma input-soma2 numeric" maxlength="3" id="3" />
        </div>
        <div class="col-sm-6 col-xs-6">
            &nbsp;<span class="span-sum">=</span>&nbsp;
            <input class="9 resp-soma numeric" maxlength="3" id="9" />
        </div>
        <div class="check-img col-sm-1 col-xs-1">
            <i class="hidden icon-atv-check icon-atv-check-9 fa fa-check fa-3x margin-bottom"></i>
            <i class="hidden icon-atv-error icon-atv-error-9 fa fa-times fa-3x margin-bottom"></i>
        </div>
    </div>
    <div class="col-sm-12 col-xs-12">
        <div class="col-sm-6 col-xs-6">
            &nbsp;
            {!! Html::image('/assets/img/matematica/pino.png', 'focas', ['class' => 'img-soma 8']) !!}
        </div>
        <div class="col-sm-6 col-xs-6">
            &nbsp;<span class="span-sum">=</span>&nbsp;
            <input class="8 resp-soma numeric" maxlength="3" id="8" />
        </div>
        <div class="check-img col-sm-1 col-xs-1">
            <i class="hidden icon-atv-check icon-atv-check-8 fa fa-check fa-3x margin-bottom"></i>
            <i class="hidden icon-atv-error icon-atv-error-8 fa fa-times fa-3x margin-bottom"></i>
        </div>
    </div>
    <div class="div-soma col-sm-12 col-xs-12">
        <div class="check-img col-sm-1 col-xs-1">
            <i class="hidden icon-atv-check icon-atv-check-8 fa fa-check fa-3x margin-bottom"></i>
            <i class="hidden icon-atv-error icon-atv-error-8 fa fa-times fa-3x margin-bottom"></i>
        </div>
        <div class="inner-sum col-sm-6 col-xs-6">
            &nbsp;
            <input class="4 input-soma input-soma1 numeric" maxlength="3" id="4" />&nbsp;<span class="span-sum-symbol">+</span>
            <input class="4 input-soma input-soma2 numeric" maxlength="3" id="4"/>
        </div>
        <div class="col-sm-6 col-xs-6">
            &nbsp;<span class="span-sum">=</span>&nbsp;
            <input class="8 resp-soma numeric" maxlength="3" id="8" />
        </div>
        <div class="check-img col-sm-1 col-xs-1">
            <i class="hidden icon-atv-check icon-atv-check-8 fa fa-check fa-3x margin-bottom"></i>
            <i class="hidden icon-atv-error icon-atv-error-8 fa fa-times fa-3x margin-bottom"></i>
        </div>
    </div>
</div>
@include('includes.scripts')
<script>

    $(document).ready(function () {

        var $erros = 0;
        var $acertos = 0;
        var $dateIni = getDate();

        $('.numeric').keydown(function (e) {
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                    (e.keyCode == 65 && e.ctrlKey === true) ||
                    (e.keyCode == 67 && e.ctrlKey === true) ||
                    (e.keyCode == 88 && e.ctrlKey === true) ||
                    (e.keyCode >= 35 && e.keyCode <= 39)) {
                return;
            }
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        });

        function checkAnswers(e){
            $('.resp-soma').each(function(){
                var sum = $(this).attr('id');
                if($(this).val() == sum){
                    if(!$(this).hasClass('acerto')){
                        $("#acertos-3").val($acertos++);
                    }
                    $(this).addClass('no-click');
                    $(this).attr('readonly', 'true');
                    $(this).unbind('click');
                    $(this).addClass('acerto');
                    $(this).parent('div').next('div').find('.icon-atv-error').addClass('hidden');
                    $(this).parent('div').next('div').find('.icon-atv-check').removeClass('hidden');
                } else if($(this).val() != sum){
                    $erros = $erros+1;
                    $("#erros-3").val($erros);
                    $(this).addClass('erro');
                    $(this).parent('div').next('div').find('.icon-atv-error').removeClass('hidden');
                }
            });

            $('.input-soma1').each(function(){
                var num1 = $(this).attr('id');
                if($(this).val() == num1){
                    if(!$(this).hasClass('acerto')){
                        $("#acertos-3").val($acertos++);
                    }
                    $(this).addClass('no-click');
                    $(this).attr('readonly', 'true');
                    $(this).unbind('click');
                    $(this).addClass('acerto');
                    $(this).parent('div').prev('div').find('.icon-atv-error').addClass('hidden');
                    $(this).parent('div').prev('div').find('.icon-atv-check').removeClass('hidden');
                } else if($(this).val() != num1){
                    $erros = $erros+1;
                    $("#erros-3").val($erros);
                    $(this).addClass('erro');
                    $(this).parent('div').prev('div').find('.icon-atv-check').addClass('hidden');
                    $(this).parent('div').prev('div').find('.icon-atv-error').removeClass('hidden');
                }
            });

            $('.input-soma2').each(function(){
                var num2 = $(this).attr('id');
                if($(this).val() == num2){
                    if(!$(this).hasClass('acerto')){
                        $("#acertos-3").val($acertos++);
                    }
                    $(this).addClass('no-click');
                    $(this).attr('readonly', 'true');
                    $(this).unbind('click');
                    $(this).addClass('acerto');
                    if(!$(this).parent('div').find('.input-soma1').hasClass('erro')){
                        $(this).parent('div').prev('div').find('.icon-atv-error').addClass('hidden');
                        $(this).parent('div').prev('div').find('.icon-atv-check').removeClass('hidden');
                    }
                } else if($(this).val() != num2){
                    $erros = $erros+1;
                    $("#erros-3").val($erros);
                    $(this).addClass('erro');
                    $(this).parent('div').prev('div').find('.icon-atv-check').addClass('hidden');
                    $(this).parent('div').prev('div').find('.icon-atv-error').removeClass('hidden');
                }
            });
            if ($acertos < 12  && $erros > 0) {
                swal("Ops... Alguma resposta está errada!", "", "warning");
                playSound('wrong');
            } else if ($acertos >= 12  || $erros == 0){
                playSound('claps');
                $(e).addClass('no-click');
                $(e).attr('readonly', 'true');
                $(e).unbind('click');
                $(e).addClass('acerto');
                $(e).parent('div').prev('div').find('.icon-atv-error').addClass('hidden');
                $(e).parent('div').prev('div').find('.icon-atv-check').removeClass('hidden');
                swal({
                        title: "Parabéns, você acertou todas as respostas!",
                        type: "success",
                        showCancelButton: false,
                        closeOnConfirm: true
                    },
                    function (isConfirm) {
                        if (isConfirm) {

                            var sbtvId = $("#hdn_subatividade_id-3").val();
                            var toHide = '';
                            var toShow = '';
                            var erros = $("#erros-3").val();
                            var acertos = $("#acertos-3").val();
                            var dateFim = getDate();
                            var no_errors = false;

                            if(erros == 0){
                                no_errors = true;
                            }

                            minTry(sbtvId, 11, acertos, erros, toHide, toShow, 3, $dateIni, dateFim, no_errors);
                        }
                });
            }
        }

        function checkAnswer(e){
            var sum = $(e).attr('id');
            if($(e).val() == sum){
                if(!$(e).hasClass('acerto')){
                    $("#acertos-3").val($acertos++);
                }
                $(e).addClass('no-click');
                $(e).attr('readonly', 'true');
                $(e).unbind('click');
                $(e).addClass('acerto');
                $(e).parent('div').next('div').find('.icon-atv-error').addClass('hidden');
                $(e).parent('div').next('div').find('.icon-atv-check').removeClass('hidden');
            } else if($(e).val() != sum){
                $erros = $erros+1;
                $("#erros-3").val($erros);
                $(e).addClass('erro');
                $(e).parent('div').next('div').find('.icon-atv-error').removeClass('hidden');
            }

            var soma1 = $(e).parent('div').find('.input-soma1').attr('id');
            if($(soma1).val() == num1){
                if(!$(soma1).hasClass('acerto')){
                    $("#acertos-3").val($acertos++);
                }
                $(soma1).addClass('no-click');
                $(soma1).attr('readonly', 'true');
                $(soma1).unbind('click');
                $(soma1).addClass('acerto');
                $(soma1).parent('div').prev('div').find('.icon-atv-error').addClass('hidden');
                $(soma1).parent('div').prev('div').find('.icon-atv-check').removeClass('hidden');
            } else if($(soma1).val() != num1){
                $erros = $erros+1;
                $("#erros-3").val($erros);
                $(soma1).addClass('erro');
                $(soma1).parent('div').prev('div').find('.icon-atv-check').addClass('hidden');
                $(soma1).parent('div').prev('div').find('.icon-atv-error').removeClass('hidden');
            }

            var soma2 = $(e).parent('div').find('.input-soma2').attr('id');
            if($(soma2).val() == num2){
                if(!$(soma2).hasClass('acerto')){
                    $("#acertos-3").val($acertos++);
                }
                $(soma2).addClass('no-click');
                $(soma2).attr('readonly', 'true');
                $(soma2).unbind('click');
                $(soma2).addClass('acerto');
                if(!$(soma2).parent('div').find('.input-soma1').hasClass('erro')){
                    $(soma2).parent('div').prev('div').find('.icon-atv-error').addClass('hidden');
                    $(soma2).parent('div').prev('div').find('.icon-atv-check').removeClass('hidden');
                }
            } else if($(soma2).val() != num2){
                $erros = $erros+1;
                $("#erros-3").val($erros);
                $(soma2).addClass('erro');
                $(soma2).parent('div').prev('div').find('.icon-atv-check').addClass('hidden');
                $(soma2).parent('div').prev('div').find('.icon-atv-error').removeClass('hidden');
            }

            if ($(e).val() == sum && soma1 == num1 && soma2 == num2) {
                swal("Ops... Alguma resposta está errada!", "", "warning");
                playSound('wrong');
            } else if ($(e).val() != sum || soma1 != num1 || soma2 != num2){
                playSound('claps');
                $(e).addClass('no-click');
                $(e).attr('readonly', 'true');
                $(e).unbind('click');
                $(e).addClass('acerto');
                $(e).parent('div').prev('div').find('.icon-atv-error').addClass('hidden');
                $(e).parent('div').prev('div').find('.icon-atv-check').removeClass('hidden');
                swal({
                        title: "Parabéns, você acertou todas as respostas!",
                        type: "success",
                        showCancelButton: false,
                        closeOnConfirm: true
                    },
                    function (isConfirm) {
                        if (isConfirm) {

                            var sbtvId = $("#hdn_subatividade_id-3").val();
                            var toHide = '';
                            var toShow = '';
                            var erros = $("#erros-3").val();
                            var acertos = $("#acertos-3").val();
                            var dateFim = getDate();
                            var no_errors = false;

                            if(erros == 0){
                                no_errors = true;
                            }

                            minTry(sbtvId, 11, acertos, erros, toHide, toShow, 3, $dateIni, dateFim, no_errors);
                        }
                });
            }
        }

        $('.btn-atividade-3').on('click', function (e) {
            checkAnswers(e);
        });
        
        /*$('.resp-soma').on('blur', function(){
            
        });*/

        $('#btn-prev-3').on('click', function () {
            var toHide = '';
            var toShow = '';
            btnPrevAtvd(toHide, toShow);
        });
    });
</script>
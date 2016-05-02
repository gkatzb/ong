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
            if($acertos != 11) {
                swal("Ops... Alguma resposta está errada!", "", "warning");
                playSound('wrong');

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
                        $("#erros-3").val($erros++);
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
                        $("#erros-3").val($erros++);
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
                        $("#erros-3").val($erros++);
                        $(this).addClass('erro');
                        $(this).parent('div').prev('div').find('.icon-atv-check').addClass('hidden');
                        $(this).parent('div').prev('div').find('.icon-atv-error').removeClass('hidden');
                    }
                });
            } else if ($acertos >= 11){
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

                                minTry(sbtvId, 6, acertos, erros, toHide, toShow, 3, $dateIni, dateFim, no_errors);
                            }
                        });
            }
        }

        $('.btn-atividade-3').on('click', function (e) {
            checkAnswers(e);
        });

        $('#btn-prev-3').on('click', function () {
            var toHide = '';
            var toShow = '';
            btnPrevAtvd(toHide, toShow);
        });
    });
</script>
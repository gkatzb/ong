<div class="container-fluid materias-container text-uppercase">
    <div class="col-sm-12 col-xs-12">
        <div class="col-sm-6 col-xs-6">
            &nbsp;
            {!! Html::image('/assets/img/matematica/chapeu.png', 'chapeu', ['class' => 'img-soma 7']) !!}
        </div>
        <div class="col-sm-6 col-xs-6">
            &nbsp;<span class="span-sum">=</span>&nbsp;
            <input class="7 resp-soma numeric" maxlength="3" />
        </div>
        <div class="check-img col-sm-1 col-xs-1">
            <i class="hidden icon-atv-check icon-atv-check-7 fa fa-check fa-3x margin-bottom"></i>
            <i class="hidden icon-atv-error icon-atv-error-7 fa fa-times fa-3x margin-bottom"></i>
        </div>
    </div>
    <div class="div-soma col-sm-12 col-xs-12">
        <div class="inner-sum col-sm-6 col-xs-6">
            &nbsp;
            <input class="7 input-soma numeric" maxlength="3"/>&nbsp;<span class="span-sum-symbol">+</span>
            <input class="7 input-soma numeric" maxlength="3"/>
        </div>
        <div class="col-sm-6 col-xs-6">
            &nbsp;<span class="span-sum">=</span>&nbsp;
            <input class="7 resp-soma numeric" maxlength="3" />
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
            <input class="9 resp-soma numeric" maxlength="3" />
        </div>
        <div class="check-img col-sm-1 col-xs-1">
            <i class="hidden icon-atv-check icon-atv-check-9 fa fa-check fa-3x margin-bottom"></i>
            <i class="hidden icon-atv-error icon-atv-error-9 fa fa-times fa-3x margin-bottom"></i>
        </div>
    </div>
    <div class="div-soma col-sm-12 col-xs-12">
        <div class="inner-sum col-sm-6 col-xs-6">
            &nbsp;
            <input class="9 input-soma numeric" maxlength="3"/>&nbsp;<span class="span-sum-symbol">+</span>
            <input class="9 input-soma numeric" maxlength="3"/>
        </div>
        <div class="col-sm-6 col-xs-6">
            &nbsp;<span class="span-sum">=</span>&nbsp;
            <input class="9 resp-soma numeric" maxlength="3" />
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
            <input class="8 resp-soma numeric" maxlength="3" />
        </div>
        <div class="check-img col-sm-1 col-xs-1">
            <i class="hidden icon-atv-check icon-atv-check-8 fa fa-check fa-3x margin-bottom"></i>
            <i class="hidden icon-atv-error icon-atv-error-8 fa fa-times fa-3x margin-bottom"></i>
        </div>
    </div>
    <div class="div-soma col-sm-12 col-xs-12">
        <div class="inner-sum col-sm-6 col-xs-6">
            &nbsp;
            <input class="8 input-soma numeric" maxlength="3"/>&nbsp;<span class="span-sum-symbol">+</span>
            <input class="8 input-soma numeric" maxlength="3"/>
        </div>
        <div class="col-sm-6 col-xs-6">
            &nbsp;<span class="span-sum">=</span>&nbsp;
            <input class="8 resp-soma numeric" maxlength="3" />
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

        var erros = 0;
        var acertos = 0;
        var qtd = 1;
        var dateIni = getDate();
        var clickNum = '';

        $('.img-qtd-pic').each(function(){
            if($(this).attr('class').split(' ')[2].split('-')[1] != qtd){
                $(this).addClass('no-click');
                $(this).attr('disabled', 'true');
            }
        });

        function num_click(e){
            clickNum = $(e).attr('class').split(' ')[1].split('-')[1];

            if(!$(e).hasClass('no-click')){
                $(e).addClass('no-click');
                if (clickNum == qtd) {
                    $(e).addClass('acerto');
                    swal("Parabéns, resposta certa!", "", "success");
                    playSound('claps');
                    $('.icon-atv-check-'+qtd).removeClass('hidden');

                    if(acertos < 6){
                        $("#acertos-3").val(acertos++ + 1);

                        $('.img-qtd-num').each(function(e){
                            if(!($(this).hasClass('acerto'))){
                                $(this).removeClass('no-click');
                                $(this).removeAttr('disabled');
                            }
                        });

                        $('.qtd-'+qtd).addClass('no-click');
                        $('.qtd-'+qtd).attr('disabled', 'true');

                        qtd++ + 1;

                        $('.img-qtd-pic').each(function(){
                            if($(this).attr('class').split(' ')[2].split('-')[1] != qtd){
                                $(this).addClass('no-click');
                                $(this).attr('disabled', 'true');
                            } else if($(this).attr('class').split(' ')[2].split('-')[1] == qtd){
                                $(this).removeClass('no-click');
                                $(this).removeAttr('disabled');
                            }
                        });
                    } else {

                        $('.img-qtd-pic').each(function(){
                            $(this).addClass('no-click');
                            $(this).attr('disabled', 'true');
                        });

                        $('.img-qtd-num').each(function(){
                            $(this).addClass('no-click');
                            $(this).attr('disabled');
                        });
                    }
                } else if (clickNum != qtd){
                    $("#erros-3").val(erros++ + 1);
                    swal("Ops... Resposta errada!", "", "warning");
                    playSound('wrong');
                }
            }
        }

        $('.img-qtd-num').on('click', function () {
            num_click(this);
        });

        $('.btn-atividade-3').on('click', function (e) {
            $().each(function(){
                if
            });

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

            minTry(sbtvId, 6, acertos, erros, toHide, toShow, 3, dateIni, dateFim, no_errors);
        });

        $('#btn-prev-3').on('click', function () {
            var toHide = '';
            var toShow = '';
            btnPrevAtvd(toHide, toShow);
        });
    });
</script>
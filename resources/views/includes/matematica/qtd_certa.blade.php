<div class="container-fluid materias-container text-uppercase">
    <div class="col-sm-12 col-xs-12">
        <div class="col-sm-6 col-xs-6">
            <i class="hidden icon-atv-check icon-atv-check-1 fa fa-check fa-3x margin-bottom"></i>
            &nbsp;
            {!! Html::image('/assets/img/matematica/lobo.png', 'lobo', ['class' => 'lobo-pic img-qtd-pic qtd-1']) !!}
        </div>
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/matematica/4.png', '4', ['class' => 'img-qtd-num qtd-4']) !!}
            &nbsp;
            <i class="hidden icon-atv-check icon-atv-check-4 fa fa-check fa-3x margin-bottom chk-qty"></i>
        </div>
    </div>
    <div class="col-sm-12 col-xs-12">
        <div class="col-sm-6 col-xs-6">
            <i class="hidden icon-atv-check icon-atv-check-3 fa fa-check fa-3x margin-bottom"></i>
            &nbsp;
            {!! Html::image('/assets/img/matematica/cavalos.png', 'cavalos', ['class' => 'cavalos-pic img-qtd-pic qtd-3']) !!}
        </div>
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/matematica/2.png', '2', ['class' => 'img-qtd-num qtd-2']) !!}
            &nbsp;
            <i class="hidden icon-atv-check icon-atv-check-2 fa fa-check fa-3x margin-bottom chk-qty"></i>
        </div>
    </div>
    <div class="col-sm-12 col-xs-12">
        <div class="col-sm-6 col-xs-6">
            <i class="hidden icon-atv-check icon-atv-check-2 fa fa-check fa-3x margin-bottom"></i>
            &nbsp;
            {!! Html::image('/assets/img/matematica/focas.png', 'focas', ['class' => 'focas-pic img-qtd-pic qtd-2']) !!}
        </div>
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/matematica/3.png', '3', ['class' => 'img-qtd-num qtd-3']) !!}
            &nbsp;
            <i class="hidden icon-atv-check icon-atv-check-3 fa fa-check fa-3x margin-bottom chk-qty"></i>
        </div>
    </div>
    <div class="col-sm-12 col-xs-12">
        <div class="col-sm-6 col-xs-6">
            <i class="hidden icon-atv-check icon-atv-check-4 fa fa-check fa-3x margin-bottom"></i>
            &nbsp;
            {!! Html::image('/assets/img/matematica/elefantes.png', 'elefantes', ['class' => 'elefantes-pic img-qtd-pic qtd-4']) !!}
        </div>
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/matematica/1.png', '1', ['class' => 'img-qtd-num qtd-1']) !!}
            &nbsp;
            <i class="hidden icon-atv-check icon-atv-check-1 fa fa-check fa-3x margin-bottom chk-qty"></i>
        </div>
    </div>
</div>
@include('includes.scripts')
<script>
    $(document).ready(function () {

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

                    if(acertos < 4){
                        $("#acertos-4").val(acertos++ + 1);

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

                        var sbtvId = $("#subatividade-id").val();
                        var toHide = '';
                        var toShow = '';
                        var dateFim = getDate();
                        var no_errors = false;

                        if(erros == 0){
                            no_errors = true;
                        }

                        minTry(sbtvId, 4, acertos, erros, toHide, toShow, 4, dateIni, dateFim, no_errors);
                    }
                } else if (clickNum != qtd){
                    $("#erros-4").val(erros++ + 1);
                    swal("Ops... Resposta errada!", "", "warning");
                    playSound('wrong');
                }
            }
        }

        $('.img-qtd-num').on('click', function () {
            num_click(this);
        });

        $('#btn-prev-4').on('click', function(e){
            var toHide = '.subatividade-4';
            var toShow = '';
            btnPrevAtvd(toHide, toShow);
        });
    });
</script>
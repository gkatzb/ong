<div class="container-fluid materias-container text-uppercase">
    <div class="col-dragao">
        <span class="atividade-desc">O principe destruiu os</span>
        {!! Html::image('/assets/img/portugues/dragao.png', 'dragao', ['class' => 'img-atividade img-sing-plur img-atividade img-sing-plur-u']) !!}
        <div>
            <input class="8 input-sing-plur resp-soma" id="dragões" />
            <i class="hidden icon-atv-check icon-atv-check-4 fa fa-check fa-3x margin-bottom"></i>
        </div>
    </div>
    <div class="col-tubarao">
        <span class="atividade-desc">Os {!! Html::image('/assets/img/portugues/tubarao.png', 'tubarao', ['class' => 'img-atividade img-sing-plur img-atividade img-sing-plur-u']) !!} são peixes muito ferozes.</span>
        <div>
            <input class="8 input-sing-plur resp-soma" id="tubarões" />
            <i class="hidden icon-atv-check icon-atv-check-4 fa fa-check fa-3x margin-bottom"></i>
        </div>
    </div>
    <div class="col-aviao">
        <span class="atividade-desc">Aqueles {!! Html::image('/assets/img/portugues/aviao.png', 'aviao', ['class' => 'img-atividade img-sing-plur img-atividade img-sing-plur-u']) !!} voam muito proximo do solo.</span>
        <div>
            <input class="8 input-sing-plur resp-soma" id="aviões" />
            <i class="hidden icon-atv-check icon-atv-check-4 fa fa-check fa-3x margin-bottom"></i>
        </div>
    </div>
    <div class="col-violao">
        <span class="atividade-desc">Os músicos usaram {!! Html::image('/assets/img/portugues/violao.png', 'violao', ['class' => 'img-atividade img-sing-plur img-atividade img-sing-plur-u']) !!} novos neste show.</span>
        <div>
            <input class="8 input-sing-plur resp-soma" id="violões" />
            <i class="hidden icon-atv-check icon-atv-check-4 fa fa-check fa-3x margin-bottom"></i>
        </div>
    </div>
    <div class="col-mamao">
        <span class="atividade-desc">É preciso usar muitos {!! Html::image('/assets/img/portugues/mamao.png', 'mamao', ['class' => 'img-atividade img-sing-plur img-atividade img-sing-plur-u'])!!} para fazer esse doce.</span>
        <div>
            <input class="8 input-sing-plur resp-soma" id="mamões" />
            <i class="hidden icon-atv-check icon-atv-check-4 fa fa-check fa-3x margin-bottom"></i>
        </div>
    </div>
</div>
@include('includes.scripts')
<script>
    $(document).ready(function () {

        var erros = 0;
        var acertos = 0;
        var dateIni = getDate();

        $('.input-sing-plur').on('blur', function () {
            if ($(this).attr('id') == $(this).val()) {
                if(acertos < 5){
                    $("#acertos-15").val(acertos++ + 1);
                }
                swal("Parabéns, resposta certa!", "", "success");
                playSound('claps');
                $(this).addClass('acerto');
                $(this).closest('.fa-check').removeClass('hidden');
                $(this).unbind('click');
                $(this).attr('disabled', true);
            } else {
                $("#erros-15").val(erros++ + 1);
                swal("Ops... Resposta errada!", "", "warning");
                playSound('wrong');
                $(this).addClass('erro');
            }
        });

        $('.btn-atividade-15').on('click', function (e) {
            var sbtvId = $("#hdn_subatividade_id-15").val();
            var toHide = '.subatividade-15';
            var toShow = '.subatividade-16';
            var erros = $("#erros-15").val();
            var acertos = $("#acertos-15").val();
            var dateFim = getDate();
            var no_errors = false;

            if(erros == 0){
                no_errors = true;
            }

            minTry(sbtvId, 5, acertos, erros, toHide, toShow, 7, dateIni, dateFim, no_errors);
        });

        $('#btn-prev-15').on('click', function () {
            var toHide = '.subatividade-15';
            var toShow = '';
            btnPrevAtvd(toHide, toShow);
        });
    });
</script>
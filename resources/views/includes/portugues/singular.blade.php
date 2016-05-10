<div class="container-fluid materias-container text-uppercase">
    <div class="col-sm-12 col-xs-12">
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/portugues/dragao.png', 'dragao', ['class' => 'img-atividade img-atividade-u pull-left']) !!}
            <input class="8 resp-soma input-sing input-sing-plur" id="dragão" />
        </div>
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/portugues/tubarao.png', 'tubarao', ['class' => 'img-atividade img-atividade-u pull-right']) !!}
            <input class="8 resp-soma input-sing input-sing-plur" id="tubarão" />
        </div>
    </div>
    <div class="col-sm-12 col-xs-12">
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/portugues/aviao.png', 'aviao', ['class' => 'img-atividade img-atividade-u pull-left']) !!}
            <input class="8 resp-soma input-sing input-sing-plur" id="avião" />
        </div>
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/portugues/violao.png', 'violao', ['class' => 'img-atividade img-atividade-u pull-right']) !!}
            <input class="8 resp-soma input-sing input-sing-plur" id="violão" />
        </div>
    </div>
    <div class="col-sm-12 col-xs-12">
        <div class="col-sm-6 col-xs-6 col-md-offset-2">
            {!! Html::image('/assets/img/portugues/mamao.png', 'mamao', ['class' => 'img-atividade img-atividade-u center'])!!}
            <input class="8 resp-soma input-sing input-sing-plur" id="mamão" />
        </div>
    </div>
</div>
@include('includes.scripts')
<script>
    $(document).ready(function () {

        var erros = 0;
        var acertos = 0;
        var dateIni = getDate();

        $('.input-sing').on('blur', function () {
            if ($(this).attr('id') == $(this).val()) {
                if(acertos < 5){
                    $("#acertos-16").val(acertos++ + 1);
                }
                swal("Parabéns, resposta certa!", "", "success");
                playSound('claps');
                $(this).addClass('acerto');
                $(this).closest('.fa-check').removeClass('hidden');
                $(this).unbind('click');
                $(this).attr('disabled', true);
            } else {
                $("#erros-16").val(erros++ + 1);
                swal("Ops... Resposta errada!", "", "warning");
                playSound('wrong');
                $(this).addClass('erro');
            }
        });

        $('.btn-atividade-16').on('click', function (e) {
            var sbtvId = $("#hdn_subatividade_id-16").val();
            var toHide = '';
            var toShow = '';
            var erros = $("#erros-16").val();
            var acertos = $("#acertos-16").val();
            var dateFim = getDate();
            var no_errors = false;

            if(erros == 0){
                no_errors = true;
            }

            minTry(sbtvId, 5, acertos, erros, toHide, toShow, 7, dateIni, dateFim, no_errors);
        });

        $('#btn-prev-8').on('click', function () {
            var toHide = '.subatividade-16';
            var toShow = '.subatividade-15';
            btnPrevAtvd(toHide, toShow);
        });
    });
</script>
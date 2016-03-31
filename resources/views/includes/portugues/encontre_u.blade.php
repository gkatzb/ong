<div class="container-fluid materias-container text-uppercase">
    <div class="col-sm-12 col-xs-12">
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/portugues/urso.png', 'urso', ['class' => 'img-atividade img-atividade-u']) !!}
            <span class="atividade-desc">Urso</span>
        </div>
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/portugues/cama.png', 'cama', ['class' => 'img-atividade img-atividade-u']) !!}
            <span class="atividade-desc">Cama</span>
        </div>
    </div>
    <div class="col-sm-12 col-xs-12">
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/portugues/anel.png', 'anel', ['class' => 'img-atividade img-atividade-u']) !!}
            <span class="atividade-desc">Anel</span>
        </div>
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/portugues/uva.png', 'uva', ['class' => 'img-atividade img-atividade-u']) !!}
            <span class="atividade-desc">Uva</span>
        </div>
    </div>
    <div class="col-sm-12 col-xs-12">
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/portugues/unha.png', 'unha', ['class' => 'img-atividade img-atividade-u']) !!}
            <span class="atividade-desc">Unha</span>
        </div>
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/portugues/abelha.png', 'abelha', ['class' => 'img-atividade img-atividade-u']) !!}
            <span class="atividade-desc">Abelha</span>
        </div>
    </div>
    <div class="col-sm-12 col-xs-12">
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/portugues/bala.png', 'bala', ['class' => 'img-atividade img-atividade-u']) !!}
            <span class="atividade-desc">Bala</span>
        </div>
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/portugues/urubu.png', 'urubu', ['class' => 'img-atividade img-atividade-u']) !!}
            <span class="atividade-desc">Urubu</span>
        </div>
    </div>
</div>
@include('includes.scripts')
<script>
    $(document).ready(function () {

        var erros = 0;
        var acertos = 0;

        $('.img-atividade-u').on('click', function () {
            if ($(this).attr('alt').substr(0, 1, $(this).attr('alt').length) == 'u') {
                if(acertos < 4){
                    $("#acertos-8").val(acertos++ + 1);
                }
                swal("Parabéns, resposta certa!", "", "success");
                playSound('claps');
                $(this).next('span').addClass('acerto');
            } else {
                $("#erros-8").val(erros++ + 1);
                swal("Ops... Resposta errada!", "", "warning");
                playSound('wrong');
                $(this).next('span').addClass('erro');
            }
            $(this).unbind('click');
            $(this).attr('disabled', true);
        });

        $('.btn-atividade-8').on('click', function (e) {
            var sbtvId = $("#hdn_subatividade_id-8").val();
            var toHide = '.subatividade-8';
            var toShow = '';
            var erros = $("#erros-8").val();
            var acertos = $("#acertos-8").val();

            minTry(sbtvId, 4, acertos, erros, toHide, toShow, 4);
        });

        $('#btn-prev-8').on('click', function () {
            var toHide = '.subatividade-8';
            var toShow = '.subatividade-7';
            btnPrevAtvd(toHide, toShow);
        });
    });
</script>
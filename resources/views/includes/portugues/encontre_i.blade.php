<div class="container-fluid materias-container text-uppercase">
    <div class="col-sm-12 col-xs-12">
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/portugues/igreja.png', 'igreja', ['class' => 'img-atividade img-atividade-i']) !!}
            <span class="atividade-desc">Igreja</span>
        </div>
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/portugues/cama.png', 'cama', ['class' => 'img-atividade img-atividade-i']) !!}
            <span class="atividade-desc">Cama</span>
        </div>
    </div>
    <div class="col-sm-12 col-xs-12">
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/portugues/indio.png', 'indio', ['class' => 'img-atividade img-atividade-i']) !!}
            <span class="atividade-desc">Indio</span>
        </div>
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/portugues/ioio.png', 'ioio', ['class' => 'img-atividade img-atividade-i']) !!}
            <span class="atividade-desc">Ioio</span>
        </div>
    </div>
    <div class="col-sm-12 col-xs-12">
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/portugues/melancia.png', 'melancia', ['class' => 'img-atividade img-atividade-i']) !!}
            <span class="atividade-desc">Melancia</span>
        </div>
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/portugues/abelha.png', 'abelha', ['class' => 'img-atividade img-atividade-i']) !!}
            <span class="atividade-desc">Abelha</span>
        </div>
    </div>
    <div class="col-sm-12 col-xs-12">
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/portugues/bala.png', 'bala', ['class' => 'img-atividade img-atividade-i']) !!}
            <span class="atividade-desc">Bala</span>
        </div>
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/portugues/ilha.png', 'ilha', ['class' => 'img-atividade img-atividade-i']) !!}
            <span class="atividade-desc">Ilha</span>
        </div>
    </div>
</div>
@include('includes.scripts')
<script>
    $(document).ready(function () {

        var erros = 0;
        var acertos = 0;
        var dateIni = getDate();

        $('.img-atividade-i').on('click', function () {
            if ($(this).attr('alt').substr(0, 1, $(this).attr('alt').length) == 'i') {
                if(acertos < 4){
                    $("#acertos-6").val(acertos++ + 1);
                }
                swal("Parabéns, resposta certa!", "", "success");
                playSound('claps');
                $(this).next('span').addClass('acerto');
            } else {
                erros = erros+1;
                $("#erros-6").val(erros);
                swal("Ops... Resposta errada!", "", "warning");
                playSound('wrong');
                $(this).next('span').addClass('erro');
            }
            $(this).unbind('click');
            $(this).attr('disabled', true);
        });

        $('.btn-atividade-6').on('click', function (e) {
            var sbtvId = $("#hdn_subatividade_id-6").val();
            var toHide = '.subatividade-6';
            var toShow = '.subatividade-7';
            var erros = $("#erros-6").val();
            var acertos = $("#acertos-6").val();
            var dateFim = getDate();
            var no_errors = false;

            if(erros == 0){
                no_errors = true;
            }

            minTry(sbtvId, 4, acertos, erros, toHide, toShow, 4, dateIni, dateFim, no_errors);
        });

        $('#btn-prev-6').on('click', function () {
            var toHide = '.subatividade-6';
            var toShow = '.subatividade-5';
            btnPrevAtvd(toHide, toShow);
        });
    });
</script>
<div class="container-fluid materias-container text-uppercase">
    <div class="col-sm-12 col-xs-12">
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/portugues/abacaxi.png', 'abacaxi', ['class' => 'img-atividade img-atividade-o']) !!}
            <span class="atividade-desc">Abacaxi</span>
        </div>
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/portugues/onibus.png', 'onibus', ['class' => 'img-atividade img-atividade-o']) !!}
            <span class="atividade-desc">Ônibus</span>
        </div>
    </div>
    <div class="col-sm-12 col-xs-12">
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/portugues/anel.png', 'anel', ['class' => 'img-atividade img-atividade-o']) !!}
            <span class="atividade-desc">Anel</span>
        </div>
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/portugues/ovelha.png', 'ovelha', ['class' => 'img-atividade img-atividade-o']) !!}
            <span class="atividade-desc">Ovelha</span>
        </div>
    </div>
    <div class="col-sm-12 col-xs-12">
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/portugues/olho.png', 'olho', ['class' => 'img-atividade img-atividade-o']) !!}
            <span class="atividade-desc">Olho</span>
        </div>
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/portugues/abelha.png', 'abelha', ['class' => 'img-atividade img-atividade-o']) !!}
            <span class="atividade-desc">Abelha</span>
        </div>
    </div>
    <div class="col-sm-12 col-xs-12">
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/portugues/oculos.png', 'oculos', ['class' => 'img-atividade img-atividade-o']) !!}
            <span class="atividade-desc">Óculos</span>
        </div>
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/portugues/mala.png', 'mala', ['class' => 'img-atividade img-atividade-o']) !!}
            <span class="atividade-desc">Mala</span>
        </div>
    </div>
</div>
@include('includes.scripts')
<script>
    $(document).ready(function () {

        var erros = 0;
        var acertos = 0;

        $('.img-atividade-o').on('click', function () {
            if ($(this).attr('alt').substr(0, 1, $(this).attr('alt').length) == 'o') {
                if(acertos < 4){
                    $("#acertos-7").val(acertos++ + 1);
                }
                swal("Parabéns, resposta certa!", "", "success");
                playSound('claps');
                $(this).next('span').addClass('acerto');
            } else {
                $("#erros-7").val(erros++ + 1);
                swal("Ops... Resposta errada!", "", "warning");
                playSound('wrong');
                $(this).next('span').addClass('erro');
            }
            $(this).unbind('click');
            $(this).attr('disabled', true);
        });

        $('.btn-atividade-7').on('click', function (e) {
            var sbtvId = $("#hdn_subatividade_id-7").val();
            var toHide = '.subatividade-7';
            var toShow = '.subatividade-8';
            var erros = $("#erros-7").val();
            var acertos = $("#acertos-7").val();

            minTry(sbtvId, 4, acertos, erros, toHide, toShow, 4);
        });

        $('#btn-prev-7').on('click', function () {
            var toHide = '.subatividade-7';
            var toShow = '.subatividade-6';
            btnPrevAtvd(toHide, toShow);
        });
    });
</script>
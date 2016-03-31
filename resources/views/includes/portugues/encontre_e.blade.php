<div class="container-fluid materias-container text-uppercase">
    <div class="col-sm-12 col-xs-12">
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/portugues/abacaxi.png', 'abacaxi', ['class' => 'img-atividade img-atividade-e']) !!}
            <span class="atividade-desc">Abacaxi</span>
        </div>
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/portugues/elefante.png', 'elefante', ['class' => 'img-atividade img-atividade-e']) !!}
            <span class="atividade-desc">Elefante</span>
        </div>
    </div>
    <div class="col-sm-12 col-xs-12">
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/portugues/estrela.png', 'estrela', ['class' => 'img-atividade img-atividade-e']) !!}
            <span class="atividade-desc">Estrela</span>
        </div>
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/portugues/uva.png', 'uva', ['class' => 'img-atividade img-atividade-e']) !!}
            <span class="atividade-desc">Uva</span>
        </div>
    </div>
    <div class="col-sm-12 col-xs-12">
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/portugues/melancia.png', 'melancia', ['class' => 'img-atividade img-atividade-e']) !!}
            <span class="atividade-desc">Melancia</span>
        </div>
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/portugues/escova.png', 'escova', ['class' => 'img-atividade img-atividade-e']) !!}
            <span class="atividade-desc">Escova</span>
        </div>
    </div>
    <div class="col-sm-12 col-xs-12">
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/portugues/esquilo.png', 'esquilo', ['class' => 'img-atividade img-atividade-e']) !!}
            <span class="atividade-desc">Esquilo</span>
        </div>
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/portugues/mala.png', 'mala', ['class' => 'img-atividade img-atividade-e']) !!}
            <span class="atividade-desc">Mala</span>
        </div>
    </div>
</div>
@include('includes.scripts')
<script>
    $(document).ready(function () {

        var erros = 0;
        var acertos = 0;

        $('.img-atividade-e').on('click', function () {
            if ($(this).attr('alt').substr(0, 1, $(this).attr('alt').length) == 'e') {
                if(acertos < 4){
                    $("#acertos-5").val(acertos++ + 1);
                }
                swal("Parabéns, resposta certa!", "", "success");
                playSound('claps');
                $(this).next('span').addClass('acerto');
            } else {
                $("#erros-5").val(erros++ + 1);
                swal("Ops... Resposta errada!", "", "warning");
                playSound('wrong');
                $(this).next('span').addClass('erro');
            }
            $(this).unbind('click');
            $(this).attr('disabled', true);
        });

        $('.btn-atividade-5').on('click', function (e) {
            var sbtvId = $("#hdn_subatividade_id-5").val();
            var toHide = '.subatividade-5';
            var toShow = '.subatividade-6';
            var erros = $("#erros-5").val();
            var acertos = $("#acertos-5").val();

            minTry(sbtvId, 4, acertos, erros, toHide, toShow, 4);
        });

        $('#btn-prev-5').on('click', function () {
            var toHide = '.subatividade-5';
            var toShow = '.subatividade-4';
            btnPrevAtvd(toHide, toShow);
        });
    });
</script>
<div class="container-fluid materias-container text-uppercase">
    <div class="col-sm-12 col-xs-12">
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/portugues/abacaxi.png', 'abacaxi', ['class' => 'img-atividade img-atividade-a']) !!}
            <span class="atividade-desc">Abacaxi</span>
        </div>
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/portugues/cama.png', 'cama', ['class' => 'img-atividade img-atividade-a']) !!}
            <span class="atividade-desc">Cama</span>
        </div>
    </div>
    <div class="col-sm-12 col-xs-12">
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/portugues/anel.png', 'anel', ['class' => 'img-atividade img-atividade-a']) !!}
            <span class="atividade-desc">Anel</span>
        </div>
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/portugues/uva.png', 'uva', ['class' => 'img-atividade img-atividade-a']) !!}
            <span class="atividade-desc">Uva</span>
        </div>
    </div>
    <div class="col-sm-12 col-xs-12">
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/portugues/melancia.png', 'melancia', ['class' => 'img-atividade img-atividade-a']) !!}
            <span class="atividade-desc">Melancia</span>
        </div>
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/portugues/abelha.png', 'abelha', ['class' => 'img-atividade img-atividade-a']) !!}
            <span class="atividade-desc">Abelha</span>
        </div>
    </div>
    <div class="col-sm-12 col-xs-12">
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/portugues/bala.png', 'bala', ['class' => 'img-atividade img-atividade-a']) !!}
            <span class="atividade-desc">Bala</span>
        </div>
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/portugues/abacate.png', 'abacate', ['class' => 'img-atividade img-atividade-a']) !!}
            <span class="atividade-desc">Abacate</span>
        </div>
    </div>
</div>
@include('includes.scripts')
<script>
    $(document).ready(function () {

        var erros = 0;
        var acertos = 0;

        $('.img-atividade-a').on('click', function () {
            if ($(this).attr('alt').substr(0, 1, $(this).attr('alt').length) == 'a') {
                if(acertos < 4){
                    $("#acertos-4").val(acertos++ + 1);
                }
                swal("Parabéns, resposta certa!", "", "success");
                playSound('claps');
                $(this).next('span').addClass('acerto');
            } else {
                $("#erros-4").val(erros++ + 1);
                swal("Ops... Resposta errada!", "", "warning");
                playSound('wrong');
                $(this).next('span').addClass('erro');
            }
            $(this).unbind('click');
            $(this).attr('disabled', true);
        });

        $('.btn-atividade-4').on('click', function(e){
            var sbtvId = $("#hdn_subatividade_id-4").val();
            var toHide = '.subatividade-4';
            var toShow = '.subatividade-5';
            var erros = $("#erros-4").val();
            var acertos = $("#acertos-4").val();

            minTry(sbtvId, 4, acertos, erros, toHide, toShow, 4);
        });

        $('#btn-prev-4').on('click', function(e){
            var toHide = '.subatividade-4';
            var toShow = '';
            btnPrevAtvd(toHide, toShow);
        });
    });
</script>
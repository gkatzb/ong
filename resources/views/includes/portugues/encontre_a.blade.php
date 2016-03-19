<div class="container-fluid materias-container text-uppercase">
    <div class="col-sm-12 col-xs-12">
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/portugues/abacaxi.png', 'abacaxi', ['class' => 'img-atividade']) !!}
            <span class="atividade-desc">Abacaxi</span>
        </div>
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/portugues/cama.png', 'cama', ['class' => 'img-atividade']) !!}
            <span class="atividade-desc">Cama</span>
        </div>
    </div>
    <div class="col-sm-12 col-xs-12">
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/portugues/anel.png', 'anel', ['class' => 'img-atividade']) !!}
            <span class="atividade-desc">Anel</span>
        </div>
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/portugues/uva.png', 'uva', ['class' => 'img-atividade']) !!}
            <span class="atividade-desc">Uva</span>
        </div>
    </div>
    <div class="col-sm-12 col-xs-12">
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/portugues/melancia.png', 'melancia', ['class' => 'img-atividade']) !!}
            <span class="atividade-desc">Melancia</span>
        </div>
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/portugues/abelha.png', 'abelha', ['class' => 'img-atividade']) !!}
            <span class="atividade-desc">Abelha</span>
        </div>
    </div>
    <div class="col-sm-12 col-xs-12">
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/portugues/bala.png', 'bala', ['class' => 'img-atividade']) !!}
            <span class="atividade-desc">Bala</span>
        </div>
        <div class="col-sm-6 col-xs-6">
            {!! Html::image('/assets/img/portugues/abacate.png', 'abacate', ['class' => 'img-atividade']) !!}
            <span class="atividade-desc">Abacate</span>
        </div>
    </div>
</div>
@include('includes.scripts')
<script>
    $(document).ready(function () {
        var erros = 0;
        var acertos = 0;
        //if( $('.subatividade').attr('id') < $('.subatividade').attr('id') + 1 );
        $('.subatividade').first().removeClass('hidden');
        $('.img-atividade').on('click', function () {
            if ($(this).attr('alt').substr(0, 1, $(this).attr('alt').length) == 'a') {
                if(acertos < 4){
                    $("#acertos").val(acertos++ + 1);
                }
                console.log(acertos+ " | " + $("#acertos").val());
                swal("Parabéns, resposta certa!", "", "success");
                playSound('claps');
                $(this).next('span').addClass('acerto');
            } else {
                $("#erros").val(erros++ + 1);
                console.log(erros+ " | " + $("#erros").val());
                swal("Ops... Resposta errada!", "", "warning");
                playSound('wrong');
                $(this).next('span').addClass('erro');
            }
            $(this).unbind('click');
            $(this).attr('disabled', true);
        });

        $('#btn-atividade').on('click', function(){
            if(acertos < 4){
                swal("Ops... Você ainda não encontrou todos!", "", "warning");
            } else {
                $("#subatividade"+$("#hdn_subatividade_id").val()).submit();
            }
        });

        $('#btn-prev').on('click', function(){
            window.location.href = document.referrer;
        });
    });
</script>

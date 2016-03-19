<div class='container-fluid'>
    <table class='tbl-numeros' id="4">
        <tr>
            <th class="bordered"><span class="numeros parent">4</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade">4</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade">6</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade">5</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade">8</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade">9</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade">4</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade">10</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade">1</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade">2</span></th>
            <th class="tb-bordered r-bordered"><span class="numeros img-atividade">3</span></th>
        </tr>
    </table>
    <table class='tbl-numeros' id="3">
        <tr>
            <th class="bordered"><span class="numeros parent">3</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade">4</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade">6</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade">3</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade">8</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade">9</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade">6</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade">10</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade">1</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade">2</span></th>
            <th class="tb-bordered r-bordered"><span class="numeros img-atividade">3</span></th>
        </tr>
    </table>
    <table class='tbl-numeros' id="2">
        <tr>
            <th class="bordered"><span class="numeros parent">2</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade">7</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade">6</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade">5</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade">8</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade">9</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade">2</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade">10</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade">1</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade">2</span></th>
            <th class="tb-bordered r-bordered"><span class="numeros img-atividade">3</span></th>
        </tr>
    </table>
    <table class='tbl-numeros' id="1">
        <tr>
            <th class="bordered"><span class="numeros parent">&nbsp;1</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade">4</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade">1</span>&nbsp;</th>
            <th class="tb-bordered"><span class="numeros img-atividade">5</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade">8</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade">9</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade">7</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade">10</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade">1</span>&nbsp;</th>
            <th class="tb-bordered"><span class="numeros img-atividade">2</span></th>
            <th class="tb-bordered r-bordered"><span class="numeros img-atividade">9</span>&nbsp;</th>
        </tr>
    </table>
</div>
@include('includes.scripts')
<script>
    $(document).ready(function () {
        var erros = 0;
        var acertos = 0;
        $('.img-atividade').click( function () {
            if ($(this).text() == $(this).closest('table').attr('id')) {
                if(acertos < 8){
                    $("#acertos").val(acertos++ + 1);
                }
                swal("Parabéns, resposta certa!", "", "success");
                playSound('claps');
                $(this).addClass('acerto');
            } else {
                $("#erros").val(erros++ + 1);
                console.log(erros+ " | " + $("#erros").val());
                swal("Ops... Resposta errada!", "", "warning");
                playSound('wrong');
                $(this).addClass('erro');
            }
            $(this).unbind('click');
            $(this).css('cursor', 'auto');
            $(this).attr('disabled', true);
        });

        $('#btn-atividade').on('click', function(){
            if(acertos < 8){
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
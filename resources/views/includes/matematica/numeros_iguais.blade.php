<div class='container-fluid'>
    <table class='tbl-numeros' id="4">
        <tr>
            <th class="bordered"><span class="numeros parent">4</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade img-atividade-num">4</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade img-atividade-num">6</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade img-atividade-num">5</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade img-atividade-num">8</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade img-atividade-num">9</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade img-atividade-num">4</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade img-atividade-num">10</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade img-atividade-num">1</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade img-atividade-num">2</span></th>
            <th class="tb-bordered r-bordered"><span class="numeros img-atividade img-atividade-num">3</span></th>
        </tr>
    </table>
    <table class='tbl-numeros' id="3">
        <tr>
            <th class="bordered"><span class="numeros parent">3</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade img-atividade-num">4</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade img-atividade-num">6</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade img-atividade-num">3</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade img-atividade-num">8</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade img-atividade-num">9</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade img-atividade-num">6</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade img-atividade-num">10</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade img-atividade-num">1</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade img-atividade-num">2</span></th>
            <th class="tb-bordered r-bordered"><span class="numeros img-atividade img-atividade-num">3</span></th>
        </tr>
    </table>
    <table class='tbl-numeros' id="2">
        <tr>
            <th class="bordered"><span class="numeros parent">2</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade img-atividade-num">7</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade img-atividade-num">6</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade img-atividade-num">5</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade img-atividade-num">8</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade img-atividade-num">9</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade img-atividade-num">2</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade img-atividade-num">10</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade img-atividade-num">1</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade img-atividade-num">2</span></th>
            <th class="tb-bordered r-bordered"><span class="numeros img-atividade img-atividade-num">3</span></th>
        </tr>
    </table>
    <table class='tbl-numeros' id="1">
        <tr>
            <th class="bordered"><span class="numeros parent">&nbsp;1</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade img-atividade-num">4</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade img-atividade-num">1</span>&nbsp;</th>
            <th class="tb-bordered"><span class="numeros img-atividade img-atividade-num">5</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade img-atividade-num">8</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade img-atividade-num">9</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade img-atividade-num">7</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade img-atividade-num">10</span></th>
            <th class="tb-bordered"><span class="numeros img-atividade img-atividade-num">1</span>&nbsp;</th>
            <th class="tb-bordered"><span class="numeros img-atividade img-atividade-num">2</span></th>
            <th class="tb-bordered r-bordered"><span class="numeros img-atividade img-atividade-num">9</span>&nbsp;</th>
        </tr>
    </table>
</div>
@include('includes.scripts')
<script>
    $(document).ready(function () {
        var erros = 0;
        var acertos = 0;

        $('.img-atividade-num').on('click', function () {
            if ($(this).text() == $(this).closest('table').attr('id')) {
                if(acertos < 8){
                    $("#acertos-1").val(acertos++ + 1);
                }
                swal("Parabéns, resposta certa!", "", "success");
                playSound('claps');
                $(this).addClass('acerto');
            } else {
                $("#erros-1").val(erros++ + 1);
                swal("Ops... Resposta errada!", "", "warning");
                playSound('wrong');
                $(this).addClass('erro');
            }
            $(this).unbind('click');
            $(this).css('cursor', 'auto');
            $(this).attr('disabled', true);
        });

        $('.btn-atividade-1').on('click', function (e) {
            var sbtvId = $("#hdn_subatividade_id-1").val();
            var toHide = '';
            var toShow = '';
            var erros = $("#erros-1").val();
            var acertos = $("#acertos-1").val();

            minTry(sbtvId, 4, acertos, erros, toHide, toShow, 1);
        });

        $('#btn-prev-1').on('click', function () {
            var toHide = '';
            var toShow = '';
            btnPrevAtvd(toHide, toShow);
        });
    });
</script>
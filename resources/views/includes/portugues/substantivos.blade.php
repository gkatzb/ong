<div class="container-fluid materias-container text-uppercase">
    <div class="">
        <div class="genero-bg substantivo-bg">
            {!! Html::image('/assets/img/portugues/lapis.png', 'genero', ['class' => 'genero-bg-img img-atividade img-sing-plur img-atividade img-sing-plur-u']) !!}
        </div>
        <div class="col-sm-12 col-xs-12 genero-bg-front words-substantivo container-subst">
            ATLÂNTICO &nbsp;DIAMANTINA &nbsp;PEDRO &nbsp;ÁGUA &nbsp;MARIANA &nbsp;BAHIA<br/>
            URANO &nbsp;ABELHA &nbsp;NILO &nbsp;ESPADA &nbsp;CARLOS &nbsp;SAPATO<br/>
            PARAGUAI &nbsp;RORAIMA &nbsp;BERMUDA &nbsp;BOLA &nbsp;RUA &nbsp;PESSOA<br/>
            VERÃO &nbsp;CHUVA &nbsp;BELÉM &nbsp;AMOR &nbsp;GLOBO &nbsp;MARAJÓ<br/>
        </div>
        <div class="col-sm-12 col-xs-12 genero-bg-front">
            <table class="tbl-substantivos container-subst">
                <tr>
                    <th>SUBSTANTIVOS COMUNS</th>
                    <th>SUBSTANTIVOS PRÓPRIOS</th>
                </tr>
                <tr>
                    <td><input class="comum input-subs" id="23" /></td>
                    <td><input class="proprio input-subs" id="23" /></td>
                </tr>
                <tr>
                    <td><input class="comum input-subs" id="23" /></td>
                    <td><input class="proprio input-subs" id="23" /></td>
                </tr>
                <tr>
                    <td><input class="comum input-subs" id="23" /></td>
                    <td><input class="proprio input-subs" id="23" /></td>
                </tr>
                <tr>
                    <td><input class="comum input-subs" id="23" /></td>
                    <td><input class="proprio input-subs" id="23" /></td>
                </tr>
                <tr>
                    <td><input class="comum input-subs" id="23" /></td>
                    <td><input class="proprio input-subs" id="23" /></td>
                </tr>
                <tr>
                    <td><input class="comum input-subs" id="23" /></td>
                    <td><input class="proprio input-subs" id="23" /></td>
                </tr>
                <tr>
                    <td><input class="comum input-subs" id="23" /></td>
                    <td><input class="proprio input-subs" id="23" /></td>
                </tr>
                <tr>
                    <td><input class="comum input-subs" id="23" /></td>
                    <td><input class="proprio input-subs" id="23" /></td>
                </tr>
                <tr>
                    <td><input class="comum input-subs" id="23" /></td>
                    <td><input class="proprio input-subs" id="23" /></td>
                </tr>
                <tr>
                    <td><input class="comum input-subs" id="23" /></td>
                    <td><input class="proprio input-subs" id="23" /></td>
                </tr>
                <tr>
                    <td><input class="comum input-subs" id="23" /></td>
                    <td><input class="proprio input-subs" id="23" /></td>
                </tr>
                <tr>
                    <td><input class="comum input-subs" id="23" /></td>
                    <td><input class="proprio input-subs" id="23" /></td>
                </tr>
            </table>
                <i class="hidden icon-gen-check icon-gen-check-4 fa fa-check fa-3x margin-bottom"></i>
                <i class="hidden icon-gen-error icon-gen-error-8 fa fa-times fa-3x margin-bottom"></i><br/>
            </div>
        </div>
    </div>
</div>
@include('includes.scripts')
<script>
    $(document).ready(function () {

        var erros = 0;
        var acertos = 0;
        var dateIni = getDate();
        var arrComum = ['ÁGUA', 'URANO', 'ABELHA', 'ESPADA', 'SAPATO', 'BERMUDA', 'BOLA', 'RUA', 'PESSOA', 'CHUVA',
            'AMOR', 'GLOBO'];
        var arrProprio = ['PARAGUAI', 'RORAIMA', 'ATLÂNTICO', 'DIAMANTINA', 'PEDRO', 'MARIANA', 'BAHIA', 'CARLOS',
            'VERÃO', 'NILO', 'BELÉM', 'MARAJÓ'];

        $('.comum').on('blur', function () {
            var isCorrect = false;
            var palavra = $(this).val().toUpperCase();
            for (var i = 0; i <= arrComum.length; i++) {
                if (palavra == arrComum[i]) {
                    if (acertos < 11) {
                        $("#acertos-17").val(acertos++ + 1);
                    }
                    swal("Parabéns, resposta certa!", "", "success");
                    playSound('claps');
                    $(this).addClass('acerto');
                    $(this).next('.icon-gen-check').removeClass('hidden');
                    $(this).next('.icon-gen-check').next('.icon-gen-error').addClass('hidden');
                    $(this).unbind('click');
                    $(this).attr('disabled', true);
                    isCorrect = true;
                }
            }
            if(!isCorrect) {
                $("#erros-17").val(erros++ + 1);
                swal("Ops... Resposta errada!", "", "warning");
                playSound('wrong');
                $(this).next('.icon-gen-check').next('.icon-gen-error').removeClass('hidden');
                $(this).addClass('erro');
            }
        });

        $('.proprio').on('blur', function () {
            var isCorrect = false;
            var palavra = $(this).val().toUpperCase();
            for (var i = 0; i <= arrProprio.length; i++) {
                if (palavra == arrProprio[i]) {
                    if (acertos < 11) {
                        $("#acertos-17").val(acertos++ + 1);
                    }
                    swal("Parabéns, resposta certa!", "", "success");
                    playSound('claps');
                    $(this).addClass('acerto');
                    $(this).next('.icon-gen-check').removeClass('hidden');
                    $(this).next('.icon-gen-check').next('.icon-gen-error').addClass('hidden');
                    $(this).unbind('click');
                    $(this).attr('disabled', true);
                    isCorrect = true;
                }
            }
            if(!isCorrect) {
                $("#erros-17").val(erros++ + 1);
                swal("Ops... Resposta errada!", "", "warning");
                playSound('wrong');
                $(this).next('.icon-gen-check').next('.icon-gen-error').removeClass('hidden');
                $(this).addClass('erro');
            }
        });

        $('.btn-atividade-17').on('click', function (e) {
            var sbtvId = $("#hdn_subatividade_id-17").val();
            var toHide = '';
            var toShow = '';
            var erros = $("#erros-17").val();
            var acertos = $("#acertos-17").val();
            var dateFim = getDate();
            var no_errors = false;

            if(erros == 0){
                no_errors = true;
            }

            minTry(sbtvId, 11, acertos, erros, toHide, toShow, 8, dateIni, dateFim, no_errors);
        });

        $('#btn-prev-17').on('click', function () {
            var toHide = '.subatividade-17';
            var toShow = '';
            btnPrevAtvd(toHide, toShow);
        });
    });
</script>
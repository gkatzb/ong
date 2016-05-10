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
                    <td><input class="comum input-plur" id="23" /></td>
                    <td><input class="proprio input-plur" id="23" /></td>
                </tr>
                <tr>
                    <td><input class="comum input-plur" id="23" /></td>
                    <td><input class="proprio input-plur" id="23" /></td>
                </tr>
                <tr>
                    <td><input class="comum input-plur" id="23" /></td>
                    <td><input class="proprio input-plur" id="23" /></td>
                </tr>
                <tr>
                    <td><input class="comum input-plur" id="23" /></td>
                    <td><input class="proprio input-plur" id="23" /></td>
                </tr>
                <tr>
                    <td><input class="comum input-plur" id="23" /></td>
                    <td><input class="proprio input-plur" id="23" /></td>
                </tr>
                <tr>
                    <td><input class="comum input-plur" id="23" /></td>
                    <td><input class="proprio input-plur" id="23" /></td>
                </tr>
                <tr>
                    <td><input class="comum input-plur" id="23" /></td>
                    <td><input class="proprio input-plur" id="23" /></td>
                </tr>
                <tr>
                    <td><input class="comum input-plur" id="23" /></td>
                    <td><input class="proprio input-plur" id="23" /></td>
                </tr>
                <tr>
                    <td><input class="comum input-plur" id="23" /></td>
                    <td><input class="proprio input-plur" id="23" /></td>
                </tr>
                <tr>
                    <td><input class="comum input-plur" id="23" /></td>
                    <td><input class="proprio input-plur" id="23" /></td>
                </tr>
                <tr>
                    <td><input class="comum input-plur" id="23" /></td>
                    <td><input class="proprio input-plur" id="23" /></td>
                </tr>
                <tr>
                    <td><input class="comum input-plur" id="23" /></td>
                    <td><input class="proprio input-plur" id="23" /></td>
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
        var arrComum = [ATLÂNTICO &nbsp;DIAMANTINA &nbsp;PEDRO &nbsp;ÁGUA &nbsp;MARIANA &nbsp;BAHIA<br/>
        URANO &nbsp;ABELHA &nbsp;NILO &nbsp;ESPADA &nbsp;CARLOS &nbsp;SAPATO<br/>
        PARAGUAI &nbsp;RORAIMA &nbsp;BERMUDA &nbsp;BOLA &nbsp;RUA &nbsp;PESSOA<br/>
        VERÃO &nbsp;CHUVA &nbsp;BELÉM &nbsp;AMOR &nbsp;GLOBO &nbsp;MARAJÓ<br/>];
        var arrProprio = [];

        $('.comum').on('blur', function () {
            if ($(this).val() == $(this).val()) {
                if(acertos < 24){
                    $("#acertos-14").val(acertos++ + 1);
                }
                swal("Parabéns, resposta certa!", "", "success");
                playSound('claps');
                $(this).addClass('acerto');
                $(this).next('.icon-gen-check').removeClass('hidden');
                $(this).next('.icon-gen-check').next('.icon-gen-error').addClass('hidden');
                $(this).unbind('click');
                $(this).attr('disabled', true);
            } else {
                $("#erros-14").val(erros++ + 1);
                swal("Ops... Resposta errada!", "", "warning");
                playSound('wrong');
                $(this).next('.icon-gen-check').next('.icon-gen-error').removeClass('hidden');
                $(this).addClass('erro');
            }
        });

        $('.btn-atividade-14').on('click', function (e) {
            var sbtvId = $("#hdn_subatividade_id-14").val();
            var toHide = '';
            var toShow = '';
            var erros = $("#erros-14").val();
            var acertos = $("#acertos-14").val();
            var dateFim = getDate();
            var no_errors = false;

            if(erros == 0){
                no_errors = true;
            }

            minTry(sbtvId, 24, acertos, erros, toHide, toShow, 6, dateIni, dateFim, no_errors);
        });

        $('#btn-prev-8').on('click', function () {
            var toHide = '.subatividade-14';
            var toShow = '';
            btnPrevAtvd(toHide, toShow);
        });
    });
</script>
function load_template(target, url, append) {
    if(!append){
        $(target).load(url);
    } else {
        $.ajax({
            url: url,
            context: target,
            type: 'GET',
            success: function(results){
                $(target).append(results);
            }
        });
    }
}

function max_length(e, s){
    $(e).attr('maxlength', s);
    $(e).attr('size', s);
}

function blur_e(e, s){
    alert($(e).length);
    if($(e).length == s){
        $(e).blur();
    }
}

function playSound(filename){
    document.getElementById("sound").innerHTML='<audio autoplay="autoplay"><source src="/assets/sounds/' + filename + '.mp3" type="audio/mpeg" /><embed hidden="true" autostart="true" loop="false" src="' + filename +'.mp3" /></audio>';
}

$(document).ready(function(){
    $('#btn-cadastrar').on('click', function(){
        $('.form-login').addClass('hidden');
        $('.form-cadastro').removeClass('hidden');
        $('.login-title').addClass('hidden');
        $('.cadastro-title').removeClass('hidden');
    });
});

function btnPrevAtvd(toHide, toShow){
    if(toShow == ''){
        window.location.href = document.referrer;
    } else {
        $(toShow).removeClass('hidden');
        $(toHide).addClass('hidden');
    }
}

function btnNextAtvd(toHide, toShow, atvdId, dateIni, dateFim, no_errors){
    if(toShow == ''){
        window.location.href = atvdId+'/actvd-done/'+dateIni+'/'+dateFim+'/'+no_errors;
    } else {
        $(toShow).removeClass('hidden');
        $(toHide).addClass('hidden');
    }
}

function minTry(sbtvId, minTry, acertos, erros, toHide, toShow, atvdId, dateIni, dateFim, no_errors){
    if(acertos < minTry){
        swal("Ops... Você ainda não completou a atividade!", "", "warning");
        playSound('wrong');
    } else {
        $.ajax({
            url: atvdId+'/desempenho',
            method: 'post',
            data: {
                _token: $('#_token').val(),
                subtvd_id: sbtvId,
                erros: erros,
                acertos: acertos,
                date_ini: dateIni,
                date_fim: dateFim,
                no_errors: no_errors
            },
            success: function () {
                btnNextAtvd(toHide, toShow, atvdId, dateIni, dateFim, no_errors);
            }
        });
    }
}

function getDate(){
    var date = new Date();
    var dd = date.getDate();
    var mm = date.getMonth()+1; //January is 0!
    var yyyy = date.getFullYear();
    var hh = date.getHours();
    var min = date.getMinutes();
    var i = date.getSeconds();

    if(dd<10) {
        dd='0'+dd
    }

    if(mm<10) {
        mm='0'+mm
    }

    var time = ('0'  + hh).slice(-2)+':'+('0'  + min).slice(-2)+':'+('0' + i).slice(-2);

    date = yyyy+'-'+mm+'-'+dd+' '+time;

    return date;
}

$(document).ready(function () {
    $('.subatividade').first().removeClass('hidden');
});
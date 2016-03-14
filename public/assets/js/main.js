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

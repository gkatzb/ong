function load_template(target, url, append) {
    if(!append){
        jQuery(target).load(url);
    } else {
        jQuery.ajax({
            url: url,
            context: target,
            type: 'GET',
            success: function(results){
                jQuery(target).append(results);
            }
        });
    }
}

function max_length(e, s){
    jQuery(e).attr('maxlength', s);
    jQuery(e).attr('size', s);
}

function blur_e(e, s){
    alert(jQuery(e).length);
    if(jQuery(e).length == s){
        jQuery(e).blur();
    }
}

jQuery(function($){
    /*function autocomplete_item(e, param) {
        $(".pagamentos .item.contad input[type=text]").autocomplete("autocomplete.php"+param, {
            width: 260,
            matchContains: true,
            selectFirst: false
        });
    }

    function id(el) {
        return document.getElementById(el);
    }

    function format_ammount(un, qt) {
        return parseFloat(un.replace(',', '.'), 10) * parseFloat(qt.replace(',', '.'), 10);
    }

    function format_field_money(fied) {
        var result = format_ammount($(this).val(), $('#quantidade').val());
        $(field).val(String(result.toFixed(2)).formatMoney());
    }

    var max_fields = 10;
//Count appends
    var x = 1;

    function append_item(e, e_class, tmpl) {
        e.preventDefault;
        if (x < max_fields) {
            x++;
            load_template(e_class, 'app/templates/'+tmpl, true);
        }
    }

    function remove_append(e) {
        e.preventDefault;
        e.closest('div').remove();
        x--;
    }

    function next_page(btn, fldst_hide, fldst_show){
        $(btn).on('click', function(e){
            $('#progress li').eq($('fieldset').index($(fldst_show))).addClass('ativo');
            $(fldst_hide).hide(800);
            $(fldst_show).addClass('ativo').show(800);
            e.stopPropagation;
            e.preventDefault;
        });
    }

    String.prototype.formatMoney = function() {
        var v = this;

        if(v.indexOf('.') === -1) {
            v = v.replace(/([\d]+)/, "$1,00");
        }

        v = v.replace(/([\d]+)\.([\d]{1})$/, "$1,$20");
        v = v.replace(/([\d]+)\.([\d]{2})$/, "$1,$2");
        v = v.replace(/([\d]+)([\d]{3}),([\d]{2})$/, "$1.$2,$3");
        return v;
    }*/
});
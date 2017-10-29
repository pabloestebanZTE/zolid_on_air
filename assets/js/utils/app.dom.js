/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var dom = {
    /**
     *
     * @param {Element} cmb
     * @param {Array} array
     * @param {Object} keyNames : Ej: {text="keyName", value="keyName"}; value también soporta un array para concatenar keyNames,
     * @returns {undefined}
     */
    llenarCombo: function (cmb, array, keyNames) {
        window.setTimeout(function () {
            cmb.html("");
            cmb.append(new Option("Selecciona", ""));
            if (Array.isArray(array) && array.length > 0) {
                for (var i = 0; i < array.length; i++) {
                    var dato = array[i];
                    var value = "";
                    if (Array.isArray(keyNames.text)) {
                        var keys = keyNames.text.length;
                        for (var j = 0; j < keys; j++) {
                            value += dato[keyNames.text[j]] + ((j < (keys - 1)) ? " - " : "");
                        }
                    } else {
                        value = dato[keyNames.text];
                    }
                    cmb.append(new Option(value, dato[keyNames.value]));
                }
            } else {
                dom.comboVacio(cmb);
            }
            cmb.select2({width: "100%"});
            cmb.trigger('select2fill');
        }, 10);
    },
    /**
     * Llenará un <select> con una opción No hay registros.
     * @param {type} cmb
     */
    comboVacio: function (cmb) {
        cmb.html("");
        cmb.append(new Option("No hay registros", "-1"));
    },
    /**
     *
     * @param {type} mensaje
     * @param {type} tipo
     * @param {type} alerta
     * @returns alert with methods...
     */
    printAlert: function (message, tipo, alerta) {
        var icon = function(tipo){
          switch (tipo) {
            case 'success':
              return '<i class="fa fa-fw fa-info-circle"></i> ';
            case 'danger':
              return '<i class="fa fa-fw fa-times-circle"></i> ';
            default:
              return '<i class="fa fa-fw fa-warning"></i> ';
          }
        };
        alerta.find('#text').html(icon(tipo) + message);
        alerta.attr('class', 'alert alert-' + tipo + ' alert-dismissable');
        alerta.hide().slideDown(500);
        return {
            print: function (message, tipo) {
                alerta.find('#text').html(icon(tipo) + message);
                alerta.attr('class', 'alert alert-' + tipo + ' alert-dismissable');
            },
            clear: function () {
                alerta.find('#text').html("");
            },
            add: function (message) {
                if (alerta.find('ul').length == 0) {
                    alerta.find('#text').html("<ul></ul>");
                }
                alerta.find('#text ul').append('<li>' + icon(tipo) + message + '</li>');
            },
            hide: function () {
                alerta.hide();
            },
            show: function () {
                alerta.slideDown(500);
            }
        };
    },
    scrollTop: function () {
        $("html, body").animate({scrollTop: 0}, "slow");
    },
    submit: function(form){
      form.validate();
      var onSubmitForm = function(e){
        if(e.isDefaultPrevented())
				{
					return;
				}
			   app.stopEvent(e);
				 var form = $(this);
				 form.find('fieldset').prop('disabled', true);
         form.find('button i.fa-save').attr('class', 'fa fa-fw fa-refresh fa-spin');
				 var obj = form.getFormData();
         var ajax = null;
         ajax = app.post(form.attr('action'), obj);
				 ajax.complete(function(){
					 form.find('fieldset').prop('disabled', false);
				 }).success(function(response){
					 form.find('button i.fa-refresh.fa-spin').attr('class', 'fa fa-fw fa-save');
           if(app.successResponse){
             dom.printAlert(response.message, 'success', form.find('.alert'));
             form.find('input,textarea,select').val('');
           }else{
             dom.printAlert(response.message, 'error', form.find('.alert'));
           }
				 }).send();
      };
      form.on('submit', onSubmitForm);
    }
};

$(function () {
    $('body').on('click', '.alert .close', function () {
        $(this).parent().hide();
    });
});

var TD = {
    init: function () {
        TD.events();
        TD.configView();
        TD.fillTable([]);
        TD.getDetail();
        TD.listCombox();
    },
    events: function () {
        $('#btnDetails').on('click', TD.onClickDetails);
        $('.hour-step .icon-step').on('click', TD.onClickIconStep);
        $('.states-modal li a').on('click', TD.onClickItemState)
    },
    onClickItemState: function (e) {
//        app.stopEvent(e);
        var link = $(this);
        var ul = link.parents('ul');
        ul.find('a.active').removeClass('active');
        link.addClass('active');
    },
    onClickIconStep: function () {
        var icon = $(this);
        $('#modalChangeState').modal('show');
    },
    listCombox: function () {
        TD.listStates();
    },
    listStates: function () {
        var cmbStatus = $('#cmbEstadosTD');
        var cmbSubStatus = $('#cmbSubEstadosTD');
        app.post('TicketOnair/getAllStates').success(function (response) {
            if (response.code > 0) {
                dom.llenarCombo(cmbStatus, response.data["states"], {text: 'n_name_status', value: 'k_id_status'});
                dom.llenarCombo(cmbSubStatus, response.data["substates"], {text: 'n_name_substatus', value: 'k_id_substatus'});
            } else {
                dom.comboVacio(cmbStatus);
            }
        }).error(function (e) {
            console.error(e);
            dom.comboVacio(cmbStatus);
        }).send();
    },
    configView: function () {
        dom.configCalendar($('#txtFechaIngresoOnAir'));
        dom.configCalendar($('#txtCorrecionPendientes'));
        dom.configCalendar($('#txtFechaApertura'));
        dom.configCalendar($('#txtFechaRFT'));
        dom.configCalendar($('#txtFechaCG'));
        dom.configCalendar($('#txtFechaBloqueado'));
        dom.configCalendar($('#txtFechaDesBloqueado'));
        dom.timer($('#timeStep'), 1509706921000, $('#progressStep1'));
        $('select').select2({'width': '100%'});
    },
    getDetail: function () {
        var alert = dom.printAlert('Consultando detalles, por favor espere...', 'loading', $('#principalAlert'));
        //Consultamos...
        app.post('TicketOnair/getAllService', {id: app.getParamURL('id')})
                .success(function (response) {
                    console.log(response);
                    if (response.code > 0) {
                        $('#trackingDetails').removeClass('hidden');
                        alert.hide();
                        $('#formDetallesBasicos').fillForm(response.data);
                    } else {
                        alert.print("No se encontró ninguna coincidencia", "warning");
                    }
                }).error(function (error) {
            alert.print("Se ha producido un error desconocido, compruebe su conexión a internet y vuelva a intentarlo.", "danger");
            console.error(error);
        }).send();
    },
    onClickDetails: function () {
        $('#modalDetailsInit').modal('show');
    },
    getDetails: function () {

    },
    fillNA: function () {
        return "Indefinido";
    },
    fillTable: function (data) {
        if (TD.tablaTD) {
            dom.refreshTable(TD.tablaTD, data);
            return;
        }
        TD.tablaTD = $('#tblTrackingDetails').DataTable(dom.configTable(data,
                [
                    {title: "Columna 1", data: TD.fillNA()},
                    {title: "Columna 2", data: TD.fillNA()},
                    {title: "Columna 3", data: TD.fillNA()},
                    {title: "Columna 4", data: TD.fillNA()},
                    {title: "Columna 5", data: TD.fillNA()},
                ]));
    }
};

$(function () {
    TD.init();
})

var TD = {
    init: function () {
        TD.events();
        TD.configView();
        TD.fillTable([]);
    },
    events: function () {
        $('#btnDetails').on('click', TD.onClickDetails);
    },
    configView: function () {
        dom.configCalendar($('#txtFechaIngresoOnAir'));
        dom.configCalendar($('#txtCorrecionPendientes'));
        dom.configCalendar($('#txtFechaApertura'));
        dom.configCalendar($('#txtDesbloqueo'));
        dom.configCalendar($('#txtBloqueado'));
//        dom.notify.vencimiento();
//        dom.notify("NUEVOS TICKETS!!", "Tienes nuevos tickes para asignar", "info");
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
}

$(function () {
    TD.init();
})

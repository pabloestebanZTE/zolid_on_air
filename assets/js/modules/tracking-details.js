var TD = {
    init: function () {
        TD.events();
        TD.configView();
        TD.fillTable([]);
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
    configView: function () {
        dom.configCalendar($('#txtFechaIngresoOnAir'));
        dom.configCalendar($('#txtCorrecionPendientes'));
        dom.configCalendar($('#txtFechaApertura'));
        dom.timer($('#timeStep'), 1509706921000, $('#progressStep1'));
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

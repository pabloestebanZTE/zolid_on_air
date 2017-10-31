var TD = {
    init: function () {
        TD.events();
        TD.configView();
    },
    events: function () {
        $('#btnDetails').on('click', TD.onClickDetails);
    },
    configView: function () {
        dom.configCalendar($('#txtFechaIngresoOnAir'));
        dom.configCalendar($('#txtCorrecionPendientes'));
        dom.configCalendar($('#txtFechaApertura'));
    },
    onClickDetails: function () {
        $('#modalDetailsInit').modal('show');
    },
    getDetails: function () {

    },
}

$(function () {
    TD.init();
})
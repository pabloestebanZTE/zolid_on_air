var TD = {
    init: function () {
        TD.events();
        TD.configView();
    },
    events: function () {
        $('#btnDetails').on('click', TD.onClickDetails);
        $('.stepwizard-step a').on('click', TD.stepClick);
    },
    stepClick: function (e) {
        app.stopEvent(e);
        var step = $(this);
        var content = step.parents('.stepwizard').parent();
        var stepPanel = content.find('.step-panel' + step.attr('href'));
        content.find('.stepwizard-step a').attr('class', 'btn btn-default btn-circle');
        step.attr('class', 'btn btn-primary btn-circle');
        content.find('.step-panel').addClass('hidden');
        stepPanel.removeClass('hidden').hide().fadeIn(500);
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

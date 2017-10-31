var TD = {
  init: function(){
    TD.events();
  },
  events: function(){
    $('#btnDetails').on('click', TD.onClickDetails);
  },
  onClickDetails: function(){
    $('#modalDetailsInit').modal('show');
  },
  getDetails: function(){

  },
}

$(function(){
  TD.init();
})

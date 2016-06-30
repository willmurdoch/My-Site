$(document).ready(function(){
  $('[data-video]').click(function(e){
    e.preventDefault();
    var myVideo = $(this).attr('data-video');
    $('#popupConstraint').append('<video id="popupVid" controls fullscreen preload><source src="'+myVideo+'" type="video/mp4"></video>')
    $('#popup').fadeIn(500);
  });
  $('#popup .closeBtn').click(function(){
    $('#popup').fadeOut(500,function(){
      $('#popupVid').remove();
    });
  });
});

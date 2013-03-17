var TABURL = "https://www.facebook.com/pages/%D7%93%D7%99%D7%A4%D7%9C%D7%95%D7%9E%D7%98-Diplomat/261282453981631?sk=app_490635574280277";
var TABSRC = "https://www.optiwisei.co.il/diplomat/jobs/index.html";


var SPACER = "data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==";
$(function () {
  $.getScript("https://connect.facebook.net/he_IL/all.js",function(){
    FB.init({
      appId : '490635574280277',
      status : true, // check login status
      cookie : true, // enable cookies to allow the server to access the session
      xfbml : true // parse XFBML
    });
    FB.Canvas.setSize();
  });
  $('dt').bind('click', function () {
    if ($(this).hasClass('active')) {
      $(this).removeClass('active');
      return;
    }
    $('dt').removeClass('active');
    $(this).addClass('active');
    $('.jobname input[type=hidden]').val($(this).attr('rel'));
    $('.jobname input[type=text]').val($(this).text());
    FB.Canvas.setSize();
  });
  $('dd').prepend($('<img />').attr({
    src:SPACER,
    "class":"share"
    }).bind('click',function(){
      FB.ui({ 
          method: 'feed',
          link: TABURL,
          name: $(this).parent('dd').prev('dt').text(),
          description: $(this).parent('dd').text().substr(0,50),
          redirect_uri:TABSRC
          });
    }));

  $('#form form').ajaxForm({
    dataType: 'json',
    success: function (data) {
      if (data.success) {
        $('#form').removeClass('wait');
        $('#form form').fadeOut(function () {
          $('#form .success').fadeIn();
        });
      }
    },
    beforeSubmit: function () {
      $("form > p").fadeOut();
      $('.lname,.fname,.phone,.email,.phone,.file').each(function () {
        $(this).removeClass('error');
        if ($(this).find('input,textarea').val().length === 0) {
          $(this).addClass('error');
        }
      });
			if (/[0-9]{10}/.test($('.tz input').val())) $('.tz').addClass('error');
      var ext = $('.file input').val().split('.').pop();
      if (['png','doc','odt','docx','rtf','pdf','jpg','ods'].indexOf(ext)===-1) {
        $('.file').addClass('error');
      }
      if ($('#form .error').length > 0) {
        $("form > p").fadeIn();
        return false;
      }
      $('#form').addClass('wait');
    }
  });      
});

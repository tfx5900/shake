function setPageSize() {
    var windowsH = $(window).height();
    if (windowsH < 600) {
        windowsH = 600;
    }
    var windowsW = $(window).width();
    $('.homepage, .homepage .wrapper').css('height',windowsH - 90);
    $('.expertis-page').css('min-height',windowsH - 140);
    $('.homepage video').css('width', windowsW).css('height','auto');

}

function highlightURL() {
	var url = window.location.href;
	$('.nav-menu a').each(function(){
		if (url.indexOf($(this).attr('href')) > -1) {
			$(this).addClass('selected');
		}
	});
}

$(function(){
	setPageSize();
  $.event.add(window, 'resize', setPageSize);
  $.event.add(window, 'load', setPageSize);
	highlightURL();

	$('.about-page .nav-menu a').click(function(e){
		e.preventDefault();
		if (!$(this).hasClass('selected')) {
			$('.about-page .nav-menu a.selected').removeClass('selected');
			$(this).addClass('selected');
			$('.tab:visible').hide();
			$($(this).attr('href')).fadeIn(500);
		}
	});

	$('.people-list a').click(function(e){
		e.preventDefault();
		$('.people-full-list').fadeIn(500);
		$($(this).attr('href')).fadeIn(500);
	});

	$('.people-full-list .close-button, .people-full-list').click(function(e){
		e.preventDefault();
		$('.people-full-list').fadeOut(500);
		$('.people-full-list .person').fadeOut(500);
	});

	$('.people-full-list .person').click(function(e){
		e.stopPropagation();
	});

  $('.expertis-list a').click(function(e){
    e.preventDefault();
    $('.expertis-list').fadeOut(500);
    $($(this).attr('href')).fadeIn(500);
  });

  $('.expertis .big-close-button').click(function(){
    $('.expertis').fadeOut(500);
    $('.expertis-list').fadeIn(500);
  });

  $('.job-list a').click(function(e){
    e.preventDefault();
    $('.job-full-list').fadeIn(500);
    $($(this).attr('href')).fadeIn(500);
  });

  $('.job-full-list .job').click(function(e){
    e.stopPropagation();
  });

  $('.job .close-button, .job-full-list').click(function(e){
    e.preventDefault();
    $('.job-full-list').fadeOut(500);
    $('.job-full-list .job').fadeOut(500);
  });

  $('.work-page .nav-menu a').click(function(e){
    e.preventDefault();
    if (!$(this).hasClass('selected')) {
      var filter = $(this).attr('href').substr(1);
      $('.work-page .nav-menu a.selected').removeClass("selected");
      $(this).addClass('selected');
      $('.work').hide();
      $('.work.'+filter).fadeIn(500);
    }
  });

  $('.works .work,.people-list .person').hover(function(){
    $(this).find('h3').stop(0,0).fadeIn(300);
  },function(){
    $(this).find('h3').stop(0,0).fadeOut(300);
  });

});

(function($){
	var scroll_start = 0;
  var startchange = $('#startchange');
  var offset = startchange.offset();
  if (startchange.length){
  $(document).scroll(function() { 
      scroll_start = $(this).scrollTop();
      if(scroll_start > offset.top) {
            $(".navbar-default").css('background-color', '#ffffff');
         } else {
            $('.navbar-default').css('background-color', 'transparent');
         }
     });
  }
  $(function(){
    $('.button-collapse').sideNav();
  });// end of document ready
})(jQuery); // end of jQuery name space
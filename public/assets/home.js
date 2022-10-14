$(window).scroll(function() {
    if ($(this).scrollTop()>250)
     {
        $('#hidden_menu').slideDown("slow");
     }
    else
     {
      $('#hidden_menu').slideUp("slow");
     }
 });
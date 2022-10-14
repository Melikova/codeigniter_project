$(window).scroll(function() {
    if ($(this).scrollTop()>250)
     {
        $('#hidden_menu').animate(
            { opacity: 1 },
            { queue: false, duration: 'normal' }
           );
        $('#hidden_menu').slideDown('slow')
     }
    else
     {
        $('#hidden_menu').slideUp('slow')
        $('#hidden_menu').animate(
         { opacity: 0.6 },
         { queue: false, duration: 'normal' }
        );
     }
 });


jQuery(document).ready(function($) {
  // rating
    $('.star').on('mouseover', function(){
    var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on
 
    // Now highlight all the stars that's not after the current hovered star
    $(this).parent().children('.star').each(function(e){
      if (e < onStar) {
        $(this).addClass('hover');
      }
      else {
        $(this).removeClass('hover');
      }
    });
  
    }).on('mouseout', function(){
      $(this).parent().children('.star').each(function(e){
        $(this).removeClass('hover');
      });
    });
    /* 2. Action to perform on click */
    $('.star').on('click', function(){
      var onStar = parseInt($(this).data('value'), 10); // The star currently selected
      var stars = $(this).parent().children('.star');
      
      for (i = 0; i < stars.length; i++) {
        $(stars[i]).removeClass('selected');
      }
      
      for (i = 0; i < onStar; i++) {
        $(stars[i]).addClass('selected');
      };
  });

  // change language window
    $('.language').click(function(e){
    $('.menu_language').fadeToggle(100);
    })
    $(document).click(function (e){
      var div = $(".menu_language"); 
      var div2 = $('.language');
      if ( !div.is(e.target ) 
          && div.has(e.target).length === 0 && div2.has(e.target).length === 0 ) { 
          div.fadeOut(100);
      }
    });

      // show / hide password
      $(".toggle-password").click(function() {
      $(this).toggleClass("fa-eye fa-eye-slash");
      var input = $($(this).attr("toggle"));
      if (input.attr("type") == "password") {
        input.attr("type", "text");
      } else {
        input.attr("type", "password");
      }
    });
      // registration page -- empty inputs style
      $('.person_information input').blur(function(){
      if( $(this).val().length === 0 ) {
        $(this).addClass('default')
          $(this).prev().css({
            color: 'rgba(0, 0, 0, 0.41)'
          });
      }
      else{
        $(this).addClass('active');
        $(this).prev().css({
            color: '#000'
          });
        }
    });
      $('input[type="checkbox"]').click(function(){
        if($(this).prop("checked") == true){
          $(this).closest('span.text').css({
            color: '#000',
        })
      };
    });
      // points
      $('.client_tarif input.client').on('input', function(event) {
        event.preventDefault();
        var number = $('.client_tarif input.client').val();
        var cost = number*10;
         $('.client_tarif .cost span b').text(cost);
      });
      // disabled/enabled input points
      if($('.client_tarif label input').attr('checked',true)){
        $('.client_tarif .client').attr('disabled', false);
      }

      // conclusion price
      
    //   $('.tarif input[type=checkbox]').each(function (){
    //     if($(this).attr('checked', true)){
    //       console.log($(this));
    //       var conclusion_cost = $(this).closest('.cost span b')
    //       $('.conclusion conclusion_cost  p span').text(conclusion_cost);
    //     }
    // });

    // modal
  $(".modal").each( function(){
      $(this).wrap('<div class="overlay"></div>')
  });
  $(".open-modal").on('click', function(e){
      e.preventDefault();
      e.stopImmediatePropagation;
      
      var $this = $(this),
              modal = $($this).data("modal");
      
      $(modal).parents(".overlay").addClass("open");
      setTimeout( function(){
          $(modal).addClass("open");
      }, 350);
      
      $(document).on('click', function(e){
          var target = $(e.target);
          
          if ($(target).hasClass("overlay")){
              $(target).find(".modal").each( function(){
                  $(this).removeClass("open");
              });
              setTimeout( function(){
                  $(target).removeClass("open");
              }, 350);
          }
          
      });
      
  });
  $(".close-modal").on('click', function(e){
      e.preventDefault();
      e.stopImmediatePropagation;
      
      var $this = $(this),
              modal = $($this).data("modal");
      
      $(modal).removeClass("open");
      setTimeout( function(){ 
          $(modal).parents(".overlay").removeClass("open");
      }, 350);
      
  }); 
});
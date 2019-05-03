jQuery(document).ready(function ($) {

    $('.first-button').on('click', function () {
  
      $('.animated-icon1').toggleClass('open');
    });

    
    
      // check if browser support scroll behaviour
      if (!(window.CSS && CSS.supports('scroll-behavior', 'smooth'))) {
        console.log("smooth behaviour not supported")

        // click on link
        $('a').on('click', function(event){
          
          if(this.hash !== ""){
            
          // Prevent default anchor click behavior
          event.preventDefault();
          

          var hash = this.hash;
  
            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 800, function(){
    
            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
            
            })
          }
        })
        
      }
    
      

    

});
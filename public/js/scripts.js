// Scroll
$(document).ready(function(){
    $(window).scroll(function() { // check if scroll event happened
        if ($(document).scrollTop() > 50) { // check if user scrolled more than 50 from top of the browser window
            $(".header").css("background-color", "#027EBC");
            $(".logo-main").hide();
            $(".logo-alt").show();
        } else {
            $(".header").css("background-color", "transparent");
            $(".logo-main").show();
            $(".logo-alt").hide();
        }
    });
});

// Nav
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}


/* Owl Carousel */
$('.owl-carousel').owlCarousel({
  loop:true,
  margin:10,
  responsiveClass:true,
  responsive:{
      0:{
          items:1,
          nav:true,
          loop: true,
          navText : ["<i class='las la-angle-left'></i>","<i class='las la-angle-right'></i>"]
      },
      600:{
          items:3,
          loop: true,
          nav: true,
          navText : ["<i class='las la-angle-left'></i>","<i class='las la-angle-right'></i>"]
         
      },
      1000:{
          items:4,
          nav:true,
          loop:true,
          navText : ["<i class='las la-angle-left'></i>","<i class='las la-angle-right'></i>"]
          
      }
  }
})

/* Mascara */
jQuery("input.tel")
  .mask("(99) 9999-9999?9")
  .focusout(function (event) {  
    var target, phone, element;  
    target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
    phone = target.value.replace(/\D/g, '');
    element = $(target);  
    element.unmask();  
    if(phone.length > 10) {  
        element.mask("(99) 99999-999?9");  
    } else {  
        element.mask("(99) 9999-9999?9");  
    }  
});

/* Contador Orçamento */

$('.btn-plus, .btn-minus').on('click', function(e) {
  const isNegative = $(e.target).closest('.btn-minus').is('.btn-minus');
  const input = $(e.target).closest('.input-group').find('input');
  if (input.is('input')) {
    input[0][isNegative ? 'stepDown' : 'stepUp']()
  }
})



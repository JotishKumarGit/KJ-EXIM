$(function() {
	$(".features-scroll").jCarouselLite({btnPrev:".prev",btnNext:".next",vertical:false,visible:4,speed:400, auto:4000});
	});


$("#back-top").hide();	
$(function () {$(window).scroll(function () {if ($(this).scrollTop() > 100) {$('#back-top').fadeIn();} else {$('#back-top').fadeOut();}});
$('#back-top a').click(function () {$('body,html').animate({scrollTop: 0}, 800);return false;});
});

$('.mob_link_dd').click(function() {
    $(this).next().fadeToggle('fast');
    $(this).toggleClass('mob_link_dd_act');
    return false;
})


 $('#myCarousel2').carousel({
    interval: 30000
}); 

$('#myCarousel3').carousel({
    interval: 30000
});


$(document).ready(function(){
    $("#myUl").endlessRiver();
});

    $(document).ready(function () {
        $('#map_canvas1').addClass('scrolloff');
        $('#canvas1').on('click', function () {
            $('#map_canvas1').removeClass('scrolloff');
        });

        $("#map_canvas1").mouseleave(function () {
            $('#map_canvas1').addClass('scrolloff'); 
        });
    });
	
function toggleIcon(e) {
        $(e.target)
            .prev('.panel-heading')
            .find(".more-less")
            .toggleClass('fa-angle-down fa-angle-up');
    }
    $('.panel-group').on('hidden.bs.collapse', toggleIcon);
    $('.panel-group').on('shown.bs.collapse', toggleIcon);
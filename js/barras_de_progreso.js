$(document).ready(function(){

    $(window).scroll(function(){

        
        if($(document).scrollTop() > 3800 ) {
            $('.pg1').css({width: '95%'});
            $('.pg2').css({width: '85%'});
            $('.pg3').css({width: '80%'});
            $('.pg4').css({width: '79%'});  
        } else {
            $('.pg1,.pg2,.pg3,.pg4').css({width: '0%'});
        }

        if($(document).scrollTop() > 669 ) {
            $('.pgq1,.pgq2,.pgq3,.pgq4,.pgq5').css({width: '100%'});
        } else {
            $('.pgq1,.pgq2,.pgq3,.pgq4,.pgq5').css({width: '0%'});
        }
        
        
        
        
        
        
        
        // console.log($(window).scrollTop());

    });


});
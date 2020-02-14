$(document).ready(function(){

    $('.uno').on('click', function(){

        if(!$('#escogernos #uno').hasClass('show')) {
            $('#escogernos .uno').addClass('activo'); 
            $('#escogernos .dos').removeClass('activo');
            $('#escogernos .tres').removeClass('activo');

        } else {
            $('#escogernos .uno').removeClass('activo');
        }

    });

    $('.dos').on('click', function(){

        if(!$('#escogernos #dos').hasClass('show')) {
            $('#escogernos .dos').addClass('activo'); 
            $('#escogernos .uno').removeClass('activo');
            $('#escogernos .tres').removeClass('activo');

        } else {
            $('#escogernos .dos').removeClass('activo');
        }

    });

    $('.tres').on('click', function(){

        if(!$('#escogernos #tres').hasClass('show')) {
            $('#escogernos .tres').addClass('activo'); 
            $('#escogernos .uno').removeClass('activo');
            $('#escogernos .dos').removeClass('activo');

        } else {
            $('#escogernos .tres').removeClass('activo');
        }

    });

});
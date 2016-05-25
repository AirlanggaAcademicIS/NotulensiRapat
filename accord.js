$("#accordion > li").click(function(){

    if(false == $(this).next().is(':visible')) {
        $('#accordion > ul').slideUp(300);
    }
    $(this).next().slideToggle(300);
});

$('#accordion > ul:eq(0)').show();

$("#accordion2 > li").click(function(){

    if(false == $(this).next().is(':visible')) {
        $('#accordion2 > ul').slideUp(300);
    }
    $(this).next().slideToggle(300);
});

$('#accordion2 > ul:eq(0)').show();
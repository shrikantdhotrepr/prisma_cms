$('#media-upload').on('click', function(){
    $('body').modalmanager('loading');
    setTimeout(function(){
        $('.general-modal').load(BASE_URL + '/media/upload_files', '', function (){
            $('.general-modal').modal();
        });
    }, 1000);
});

$('.show-image').on('click', function(){
    var url =   $(this).attr("href");
    $('body').modalmanager('loading');
    setTimeout(function(){
        $('.general-modal').load( url , '', function (){
            $('.general-modal').modal();
        });
    }, 1000);
    return false;
});

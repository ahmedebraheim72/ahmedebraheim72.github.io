
(function($) {
"use strict";
    $('figure.item').on('click','i.fa-info',function(e){
        e.preventDefault();
        e.stopPropagation();
        var name = $(this).siblings('h4.name').text();
        var id = $(this).data('area');
        $('.modal .modal-title').html('');
        $('.modal .data').html('');

        let data = $(this).siblings('.portfolio-item-img').find($('.project-data')).html();
        let project_desc = '<b>Project Description: </b> <br>' + $(this).siblings('span.category').text() + '<br><br>'
        $('.modal .data').html(project_desc + data);

        $('.modal .modal-title').html(name+' Info:');
        $('.modal').modal('show');
    });

})(jQuery);
$(document).on('click', '#nova-participacao', function(){
    $.ajax({
        url: '/admin/participacoes/create',
        type: 'GET',
        success: function(data){
            $('#participation-create-modal .modal-body').html($(data));
        }
    });
});

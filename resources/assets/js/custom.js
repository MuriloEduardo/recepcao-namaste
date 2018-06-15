$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

// Registro rápido do navbar
// Escute o clique
function appendEditEventModal(hash){

    let hashSplit = hash.split('='),
        hashText = hashSplit[0],
        hashId = hashSplit.pop();

    $(hashText).modal('show');
    
    let $bodyModal = $(hashText + ' .modal-body');
    
    // Se for a primeira vez que busca o form faz ajax
    if($bodyModal.is(':empty')) {
        $.ajax({
            url: '/admin/events/' + hashId + '/edit',
            type: 'GET',
            cache: true,
            success: (data) => {
                $bodyModal.html($(data));
            },
            error: (xhr) => {
                if(xhr.status == 404) {
                    $bodyModal.html(`
                        <h5 class="text-center">Evento não encontrado :(</h5>
                    `);
                }
            }
        });
    }
};

function openModalPopup(){
    var hashText = window.location.hash.substr();
    if (hashText){
        appendEditEventModal(hashText);
    }
};

$(document).on('click', '[href*="#"]', (e) => {
    var hashText = $(e.target).attr('href');
    if (hashText){
        appendEditEventModal(hashText);
    }
});

openModalPopup();
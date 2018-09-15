require('./customers/customer.js');

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

let selCustomerModel = '#create-customer-modal',
    editEventModal = '#edit-event-modal',
    $editEventModal = $(editEventModal),
    customerSelectText = 'select.select2[name="event_belongstomany_customer_relationship[]"]';

///////////////////
// Eventos
///////////////////
function initEventModal(){
    
    let $customerSelect2 = $(customerSelectText);

    $customerSelect2.select2({
        placeholder: 'Quais clientes participaram?',
        allowClear: true,
        ajax: {
            url: '/admin/clientes',
            dataType: 'json',
            data: (params) => {
                let query = {
                    page: params.page || 1,
                    s: params.term,
                    key: 'name',
                    filter: 'contains'
                };
                return query;
            },
            processResults: (response) => {
                return {
                    results: $.map(response.data, (item) => {
                        return {
                            text: item.name,
                            id: item.id
                        }
                    }),
                    pagination: {
                        more: true
                    }
                };
            }
        },
        language: {
            noResults: () => {
                let newTag = $('.form-group.clientes input.select2-search__field').val();
                return `<div id="newNoResults">
                            <div class="noResults">Nenhum resultado encontrado</div>
                            <div class="createNew">
                                <a href="`+ selCustomerModel +`" class="btn btn-primary form-control" data-keyboard="true" data-customer-name="` + newTag + `" data-toggle="modal" data-backdrop="false" data-target="`+ selCustomerModel +`">Criar novo cliente: <strong>` + newTag + `</strong></a>
                            </div>
                        </div>`;
            }
        },
        escapeMarkup: (markup) => {
            return markup;
        }
    }).on('select2:select', (e) => {
        toastr.success('Cliente adicionado!');
    }).on('select2:unselect', (e) => {
        toastr.error('Cliente removido!');
    });
};

// Evento disparado quando modal de Events abre
$editEventModal.on('show.bs.modal', (e) => {

    let self = $(e.currentTarget),
        parent = $(e.relatedTarget),
        eventId = parent.data('event-id'),
        $modalBody = self.find('.modal-body'),
        eventName = parent.data('event-name');

        self.find('.modal-title span').text(eventName);

    if($modalBody.is(':empty')) {
        $.ajax({
            url: '/admin/events/' + eventId + '/edit',
            type: 'GET',
            success: (data) => {
                $modalBody.html($(data)).promise().done(() => {
                    initEventModal();
                });
            }
        });
    }
});

// Enviar formulario de Event Modal via PUT AJAX
$(document.body).on('submit', editEventModal + ' form', (e) => {
        
    e.preventDefault();
    
    let $fastEventEditForm = $(e.currentTarget),
        dataForm = $fastEventEditForm.serialize(),
        urlAction = $fastEventEditForm.attr('action');

    $.ajax({
        url: urlAction,
        type: 'PUT',
        data: dataForm,
        success: (response) => {

            let data = response.data;

            if (response.success) {
                
                toastr.success('Atualizado com sucesso Evento');

                $editEventModal.modal('hide');
            } else {
                toastr.error('Algo deu errado.');
            }
        }
    });
});

///////////////
// Geral
//////////////
$(window).on('load', () => {

    const $bd = $('body');
    
    // BREAD de Eventos
    if($bd.hasClass('events')) {
        initEventModal();
    }
});

const selCustomerModel = '#create-customer-modal',
    $editEventModal = $('#edit-event-modal'),
    $fastCustomerCreate = $('#customer-create'),
    customerSelectText = 'select.select2[name="event_belongstomany_customer_relationship[]"]';
    
// Evento disparado quando modal de Events abre
$(selCustomerModel).on('show.bs.modal', (e) => {

    const setNameInput = (_customerName) => {
        if(_customerName) {
            self.find('.modal-title span').text(_customerName);
            $(e.currentTarget).find('input[name="name"]').val(_customerName);
        }
    };

    let customerName = $(e.relatedTarget).data('customer-name'),
        self = $(e.currentTarget),
        parent = $(e.relatedTarget),
        customerId = parent.data('customer-id'),
        $modalBody = self.find('.modal-body');

    $(customerSelectText).select2('close');

    setNameInput(customerName);

    if($modalBody.is(':empty')) {
        $.ajax({
            url: '/admin/clientes/create',
            type: 'GET',
            success: (data) => {
                $modalBody.html($(data)).promise().done(() => {
                    setNameInput(customerName);
                });
            }
        });
    }
}).on('hide.bs.modal', (e) => {
    $(selCustomerModel + ' form')[0].reset();
});

$(document.body).on('submit', selCustomerModel + ' form', (e) => {

    e.preventDefault();
    
    let $fastCustomerEditForm = $(e.currentTarget),
        dataForm = $fastCustomerEditForm.serialize(),
        urlAction = $fastCustomerEditForm.attr('action');

    $.ajax({
        url: urlAction,
        type: 'POST',
        data: dataForm,
        success: (response) => {

            let data = response.data;

            if (response.success) {
                
                toastr.success('Cliente ' + data.name + ' criado com sucesso!');

                $(selCustomerModel).modal('hide');

                let newOption = new Option(data.name, data.id, true, true);
                $(customerSelectText).append(newOption).trigger('change');

            } else if(response.errors) {

                let errors = response.errors;
                
                for (var key in errors) {
                    if (errors.hasOwnProperty(key)) {
                        toastr.error(errors[key]);
                    }
                }
            } else {
                toastr.error('Algo deu errado.');
            }
        },
        error: (response) => {
        }
    });
});
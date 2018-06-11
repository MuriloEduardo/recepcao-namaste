var $customerSelect2 = $('select.select2[name="customer_id"], select.select2[name="participation_belongstomany_customer_relationship[]"');

console.log($customerSelect2);

$customerSelect2.each(function(i, el) {
    $(el).select2({
        placeholder: 'Quais clientes participaram?',
        allowClear: true,
        ajax: {
            url: '/admin/clientes',
            dataType: 'json',
            data: function (params) {
                var query = {
                    page: params.page || 1,
                    s: params.term,
                    key: 'name',
                    filter: 'contains'
                };
                return query;
            },
            processResults: function (response) {
                console.log(response)
                return {
                    results: $.map(response.data, function (item) {
                        return {
                            text: item.name,
                            id: item.id
                        }
                    }),
                    pagination: {
                        more: true
                    }
                };
            },
            cache: true
        },
        language: {
            noResults: function(){
                let newTag = $('.form-group.clientes input.select2-search__field').val();
                return `
                    <div id="newNoResults">
                        <div class="noResults">Nenhum resultado encontrado</div>
                        <div class="createNew">
                            <a href="`+ selCustomerModel +`" class="btn btn-primary form-control" data-keyboard="true" data-customer-name="` + newTag + `" data-toggle="modal" data-target="`+ selCustomerModel +`">Criar novo cliente: <strong>` + newTag + `</strong></a>
                        </div>
                    </div>
                `;
            }
        },
        escapeMarkup: function (markup) {
            return markup;
        }
    });
});
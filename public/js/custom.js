/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(1);
module.exports = __webpack_require__(3);


/***/ }),
/* 1 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(2);

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

var selCustomerModel = '#create-customer-modal',
    editEventModal = '#edit-event-modal',
    $editEventModal = $(editEventModal),
    customerSelectText = 'select.select2[name="event_belongstomany_customer_relationship[]"]';

///////////////////
// Eventos
///////////////////
function initEventModal() {

    var $customerSelect2 = $(customerSelectText);

    $customerSelect2.select2({
        placeholder: 'Quais clientes participaram?',
        allowClear: true,
        ajax: {
            url: '/admin/clientes',
            dataType: 'json',
            data: function data(params) {
                var query = {
                    page: params.page || 1,
                    s: params.term,
                    key: 'name',
                    filter: 'contains'
                };
                return query;
            },
            processResults: function processResults(response) {
                return {
                    results: $.map(response.data, function (item) {
                        return {
                            text: item.name,
                            id: item.id
                        };
                    }),
                    pagination: {
                        more: true
                    }
                };
            }
        },
        language: {
            noResults: function noResults() {
                var newTag = $('.form-group.clientes input.select2-search__field').val();
                return '<div id="newNoResults">\n                            <div class="noResults">Nenhum resultado encontrado</div>\n                            <div class="createNew">\n                                <a href="' + selCustomerModel + '" class="btn btn-primary form-control" data-keyboard="true" data-customer-name="' + newTag + '" data-toggle="modal" data-backdrop="false" data-target="' + selCustomerModel + '">Criar novo cliente: <strong>' + newTag + '</strong></a>\n                            </div>\n                        </div>';
            }
        },
        escapeMarkup: function escapeMarkup(markup) {
            return markup;
        }
    }).on('select2:select', function (e) {
        toastr.success('Cliente adicionado!');
    }).on('select2:unselect', function (e) {
        toastr.error('Cliente removido!');
    });
};

// Evento disparado quando modal de Events abre
$editEventModal.on('show.bs.modal', function (e) {

    var self = $(e.currentTarget),
        parent = $(e.relatedTarget),
        eventId = parent.data('event-id'),
        $modalBody = self.find('.modal-body'),
        eventName = parent.data('event-name');

    self.find('.modal-title span').text(eventName);

    if ($modalBody.is(':empty')) {
        $.ajax({
            url: '/admin/events/' + eventId + '/edit',
            type: 'GET',
            success: function success(data) {
                $modalBody.html($(data)).promise().done(function () {
                    initEventModal();
                });
            }
        });
    }
});

// Enviar formulario de Event Modal via PUT AJAX
$(document.body).on('submit', editEventModal + ' form', function (e) {

    e.preventDefault();

    var $fastEventEditForm = $(e.currentTarget),
        dataForm = $fastEventEditForm.serialize(),
        urlAction = $fastEventEditForm.attr('action');

    $.ajax({
        url: urlAction,
        type: 'PUT',
        data: dataForm,
        success: function success(response) {

            var data = response.data;

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
$(window).on('load', function () {

    var $bd = $('body');

    // BREAD de Eventos
    if ($bd.hasClass('events')) {
        initEventModal();
    }
});

/***/ }),
/* 2 */
/***/ (function(module, exports) {

var selCustomerModel = '#create-customer-modal',
    $editEventModal = $('#edit-event-modal'),
    $fastCustomerCreate = $('#customer-create'),
    customerSelectText = 'select.select2[name="event_belongstomany_customer_relationship[]"]';

// Evento disparado quando modal de Events abre
$(selCustomerModel).on('show.bs.modal', function (e) {

    var setNameInput = function setNameInput(_customerName) {
        if (_customerName) {
            self.find('.modal-title span').text(_customerName);
            $(e.currentTarget).find('input[name="name"]').val(_customerName);
        }
    };

    var customerName = $(e.relatedTarget).data('customer-name'),
        self = $(e.currentTarget),
        parent = $(e.relatedTarget),
        customerId = parent.data('customer-id'),
        $modalBody = self.find('.modal-body');

    $(customerSelectText).select2('close');

    setNameInput(customerName);

    if ($modalBody.is(':empty')) {
        $.ajax({
            url: '/admin/clientes/create',
            type: 'GET',
            success: function success(data) {
                $modalBody.html($(data)).promise().done(function () {
                    setNameInput(customerName);
                });
            }
        });
    }
}).on('hide.bs.modal', function (e) {
    $(selCustomerModel + ' form')[0].reset();
});

$(document.body).on('submit', selCustomerModel + ' form', function (e) {

    e.preventDefault();

    var $fastCustomerEditForm = $(e.currentTarget),
        dataForm = $fastCustomerEditForm.serialize(),
        urlAction = $fastCustomerEditForm.attr('action');

    $.ajax({
        url: urlAction,
        type: 'POST',
        data: dataForm,
        success: function success(response) {

            var data = response.data;

            if (response.success) {

                toastr.success('Cliente ' + data.name + ' criado com sucesso!');

                $(selCustomerModel).modal('hide');

                var newOption = new Option(data.name, data.id, true, true);
                $(customerSelectText).append(newOption).trigger('change');
            } else if (response.errors) {

                var errors = response.errors;

                for (var key in errors) {
                    if (errors.hasOwnProperty(key)) {
                        toastr.error(errors[key]);
                    }
                }
            } else {
                toastr.error('Algo deu errado.');
            }
        },
        error: function error(response) {}
    });
});

/***/ }),
/* 3 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ })
/******/ ]);
$(window).load(function() {
    var $table = $('.table'),
        $fixedColumn = $table.clone().insertAfter($table).addClass('fixed-column');

    $fixedColumn.find('th:not(:last-child),td:not(:last-child)').remove();

    function calc() {    
        $fixedColumn.find('tr').each(function(i, elem) {
            $(this).height($table.find('tr:eq(' + i + ')').height());
        });
    };

    calc();

    $(document).on('mousemove', calc);
});

$(window).load(() => {
    let $table = $('.table'),
        $fixedColumn = $table.clone().insertAfter($table).addClass('fixed-column');

    $fixedColumn.find('th:not(:last-child),td:not(:last-child)').remove();

    let calc = () => {    
        $fixedColumn.find('tr').each((i, elem) => {
            $(this).height($table.find('tr:eq(' + i + ')').height());
        });
    };

    calc();

    $(document).on('mousemove', calc);
});
$(document).ready(function () {

    var t = $('#dataTable').DataTable({});

    //index counter
    t.on('order.dt search.dt', function () {
        t.column(0, {search: 'applied', order: 'applied'}).nodes().each(function (cell, i) {
            cell.innerHTML = i + 1;
            t.cell(cell).invalidate('dom');
        });
    }).draw();
    
     // Setup - add a text input to each footer cell
    $('.cariData').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Cari '+title+'" />' );
    } );

    // DataTable
    var table = $('#dataTable').DataTable();

    // Apply the search
    table.columns().every( function () {
        var that = this;

        $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );
});
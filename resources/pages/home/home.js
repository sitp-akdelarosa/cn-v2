$( function() {
    getForOrdering();
});

function getForOrdering() {
    var token = $("meta[name=csrf-token]").attr("content");

    $.ajax({
        url: '../../../../home/get-for-ordering',
        type: 'GET',
        dataType: 'JSON',
        data: {_token: token},
    }).done(function(data, textStatus, xhr) {
        var table = $('#inventory');

        table.dataTable({
            "language": {
                "aria": {
                    "sortAscending": ": activate to sort column ascending",
                    "sortDescending": ": activate to sort column descending"
                },
                "emptyTable": "No data available in table",
                "info": "Showing _START_ to _END_ of _TOTAL_ records",
                "infoEmpty": "No records found",
                "infoFiltered": "(filtered1 from _MAX_ total records)",
                "lengthMenu": "Show _MENU_",
                "search": "Search:",
                "zeroRecords": "No matching records found",
                "paginate": {
                    "previous":"Prev",
                    "next": "Next",
                    "last": "Last",
                    "first": "First"
                }
            },
            "bLengthChange": false,
            "pageLength": 5,            
            "pagingType": "bootstrap_full_number",
            "data" : data,
            "columns": [
                { data: 'itemcode', orderable: false},
                { data: 'itemname', orderable: false},
                { data: 'forordering', orderable: false},
            ]
        });
    }).fail(function(xhr, textStatus, errorThrown) {
        console.log("error");
    });

    
}
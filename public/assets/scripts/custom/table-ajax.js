var TableAjax = function () {

    return {

        //main function to initiate the module
        initCity: function () {
            var grid = new Datatable();
            grid.init({
                src: $("#datatable_ajax"),
                onSuccess: function(grid) {
                    // execute some code after table records loaded
                },
                onError: function(grid) {
                    // execute some code on network or other general error  
                },
                dataTable: {  // here you can define a typical datatable settings from http://datatables.net/usage/options 
                    "aoColumns": [
                          { "sClass": "text-center" },
                          { "sClass": "text-center" },
                          { "sClass": "text-center" },
                          null,
                          null
                    ],
                    "aLengthMenu": [
                        [20, 50, 100, 150, -1],
                        [20, 50, 100, 150, "All"] // change per page values here
                    ],
                    "iDisplayLength": 20, // default record count per page
                    "iDisplayStart": 0, 
                    "bServerSide": true, // server side processing
                    "sAjaxSource": "city/select", // ajax source
                    "aaSorting": [[ 2, "asc" ]],
                    'aoColumnDefs': [{
                        'bSortable': false,
                        'aTargets': [-1, 0, 1]
                    }]
                }
            });

            // handle group actionsubmit button click
            grid.getTableWrapper().on('click', '.table-group-action-submit', function(e){
                e.preventDefault();
                var action = $(".table-group-action-input", grid.getTableWrapper());
                if (action.val() != "" && grid.getSelectedRowsCount() > 0) {
                    grid.addAjaxParam("sAction", "group_action");
                    grid.addAjaxParam("sGroupActionName", action.val());
                    var records = grid.getSelectedRows();
                    for (var i in records) {
                        grid.addAjaxParam(records[i]["name"], records[i]["value"]);    
                    }
                    grid.getDataTable().fnDraw();
                    grid.clearAjaxParams();
                } else if (action.val() == "") {
                    App.alert({type: 'danger', icon: 'warning', message: 'Please select an action', container: grid.getTableWrapper(), place: 'prepend'});
                } else if (grid.getSelectedRowsCount() === 0) {
                    App.alert({type: 'danger', icon: 'warning', message: 'No record selected', container: grid.getTableWrapper(), place: 'prepend'});
                }
            });
        }

    };

}();
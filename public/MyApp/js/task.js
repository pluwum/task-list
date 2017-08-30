var Task = function() {

    return {

        initStateChange: function() {
            // Set up the CSRF token for the ajax request to come
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // This function changes the state of a task
            var changeState = function(task, new_state) {
                $.ajax({
                    url: "/task/"+task+"/state",
                    method: "POST",
                    data: { state_id : new_state }
                });
            }

            jQuery('.task-status').change(function() {
                var task_id = $(this).attr('data-task');
                var new_state = $(this).val();
                changeState(task_id, new_state);
            });
        },

        initDelete: function() {
            // Set up the CSRF token for the ajax request to come
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // This function changes the state of a task
            var deleteItem = function(url) {
                $.ajax({
                    url: url,
                    type: 'DELETE',
                    success: function(result) {
                        // TODO: hide entry
                    }
                });
            }

            jQuery('.delete').click(function(e) {
                e.preventDefault();
                var url = $(this).attr('data-task');
                deleteItem(url);
            });
        },
        initDataTable: function() {
            //initialise datatable with buttons here
        },

        init: function() {

            this.initStateChange();
            this.initDelete();
            this.initDataTable();
        }
    };

}();

jQuery(document).ready(function() {
    // initialise our Task App
    Task.init();
});
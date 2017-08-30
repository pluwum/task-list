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

        init: function() {

            this.initStateChange();
        }
    };

}();

jQuery(document).ready(function() {
    // initialise our Task App
    Task.init();
});
var Task = function() {

    return {

        initStateChange: function() {

            var changeState = function(task, new_state) {
                //jQuery('.vmaps').hide();
                alert('hey');
            }

            jQuery('.task').change(function() {
                changeState("world");
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
require(
    [
        'jquery',
        'jquery/ui'
    ],
    function($) {
        $('#dialog').click(function () {
            $( "#basic-dialog" ).dialog();
        });

    }
);
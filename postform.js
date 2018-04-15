$(document).ready(function() {

    $("#message").keyup(function() {

        var maxLength = 120;
        var length = $(this).val().length;

        $("#message-characters").text(maxLength - length + " characters left.");

        if (length > maxLength) {

            $("#message-characters").css({
                "color": "#ccc"
            });

            $("#button-send").attr({
                "disabled": "disabled"
            });

        } else {

            $("#message-characters").css({
                "color": "#fff"
            });

            $("#button-send").removeAttr("disabled");

        }

    });

});
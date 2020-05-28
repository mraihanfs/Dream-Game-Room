(function ($) {

    $('#signup-form').validate({
        rules: {
            first_name: {
                required: true,
            },
            identitas: {
                required: true
            },
            email: {
                required: true
            },
            password: {
                required: true
            },
            re_password: {
                required: true,
                equalTo: "#password"
            }
        },
        onfocusout: function (element) {
            $(element).valid();
        },
    });

    jQuery.extend(jQuery.validator.messages, {
        required: "",
        remote: "",
        email: "",
        url: "",
        date: "",
        dateISO: "",
        number: "",
        digits: "",
        creditcard: "",
        equalTo: ""
    });
})(jQuery);
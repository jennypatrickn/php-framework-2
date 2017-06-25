$('#block-validate').validate({
    rules: {
        required: "required",
        email: {
            required: true,
            email: true
        },
        date: {
            required: true,
            date: true
        },
        url: {
            required: true,
            url: true
        },
        password: {
            required: true,
            minlength: 5
        },
        confirm_password: {
            required: true,
            minlength: 5,
            equalTo: "#password2"
        },
        agree: "required",
        digits: {
            required: true,
            digits: true
        },
        range: {
            required: true,
            range: [5, 16]
        }
    },
    errorClass: 'help-block',
    errorElement: 'span',
    highlight: function(element, errorClass, validClass) {
        $(element).parents('.form-group').removeClass('has-success').addClass('has-error');
    },
    unhighlight: function(element, errorClass, validClass) {
        $(element).parents('.form-group').removeClass('has-error').addClass('has-success');
    }
});


$(document).ready(function () {
    $("#form").validate({
        // in 'rules' user have to specify all the constraints for respective fields
        rules: {
            fname: {
                required: true,
                minlength: 3
            },
            lname: {
                required: true,
                minlength: 3
            },
            email: {
                required: true,
                email: true
            },
            phone: "required",
            password: {
                required: true,
                minlength: 5
            },
            cpassword: {
                required: true,
                minlength: 5,
                equalTo: "#password" //for checking both passwords are same or not
            },
            gender: {
                required: true,
            }
        },
        // in 'messages' user have to specify message as per rules
        messages: {
            firstname: " Please enter your firstname",
            lastname: " Please enter your lastname",
            email: {
                required: " Please enter a email",
                minlength: " Your email must consist of at least 2 characters"
            },
            password: {
                required: " Please enter a password",
                minlength: " Your password must be consist of at least 5 characters"
            },
            cpassword: {
                required: " Please enter a password",
                minlength: " Your password must be consist of at least 5 characters",
                equalTo: " Please enter the same password as above"
            },
            gender: " Please select gender",
        },
        submitHandler: function (form) {
            $.ajax({
                url: form.action,
                type: form.method,
                data: $(form).serialize(),
                success: function (response) {
                    alert(response);
                }
            });
        }
    });
});

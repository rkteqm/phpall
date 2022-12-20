$(document).ready(function () {
    $("#form").validate({
        // in 'rules' user have to specify all the constraints for respective fields
        rules: {
            file: "required",
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
            file: " Please select your file",
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
            var gender = "";
            var ele = document.getElementsByName('gender');
            for (i = 0; i < ele.length; i++) {
                if (ele[i].checked) {
                    gender = ele[i].value;
                }
            }
            var formData = new FormData();
            formData.append('file', $('#file')[0].files[0]);
            formData.append('fname', $('#fname').val());
            formData.append('lname', $('#lname').val());
            formData.append('email', $('#email').val());
            formData.append('phone', $('#phone').val());
            formData.append('password', $('#password').val());
            formData.append('cpassword', $('#cpassword').val());
            formData.append('gender', gender);
            $.ajax({
                url: form.action,
                type: form.method,
                data: formData,
                processData: false, // tell jQuery not to process the data
                contentType: false, // tell jQuery not to set contentType
                success: function (response) {
                    alert(response);
                }
            });
            // $.ajax({
            //     url: form.action,
            //     type: form.method,
            //     data: form.serialize(),
            //     processData: false, // tell jQuery not to process the data
            //     contentType: false, // tell jQuery not to set contentType
            //     success: function (response) {
            //         alert(response);
            //     }
            // });
        }
    });
});

var FormValidation = function () {

    return {
        //main function to initiate the module
        handleValidationCity : function() {
            var form_input = $('#form');
            var error = $('.alert-danger', form_input);
            var success = $('.alert-success', form_input);
            var warning = $('#warning', form_input);

            form_input.validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                ignore: "",
                rules: {
                    code: {
                        minlength: 3,
                        maxlength: 3,
                        required: true
                    },
                    name: {
                        minlength: 5,
                        required: true
                    }
                },

                invalidHandler: function (event, validator) { //display error alert on form submit              
                    success.hide();
                    error.show();
                    App.scrollTo(error, -200);
                },

                highlight: function (element) { // hightlight error inputs
                    $(element)
                        .closest('.form-group').addClass('has-error'); // set error class to the control group
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    $(element)
                        .closest('.form-group').removeClass('has-error'); // set error class to the control group
                },

                success: function (label) {
                    label
                        .closest('.form-group').removeClass('has-error'); // set success class to the control group
                },

                submitHandler: function (form) {
                    var data = form_input.serializeArray();
                    $.post("city/tambah", data, function( res ){
                        if(res.status == false){
                            warning.find('span').text(res.message);
                            warning.show();
                            success.hide();
                            error.hide();
                        }else{
                            warning.hide();
                            success.show();
                            error.hide();
                        }
                    }, 'json');
                }
            });
        }
    };

}();
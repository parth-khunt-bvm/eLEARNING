var Contact = function(){
    var contactDetails = function(){
        var form = $('#add-contact-data');
        var rules = {
            name: {required: true},
            email: {required: true, email: true},
            subject: {required: true},
        };
        var message = {
            name: {required: 'Please enter your name'},
            subject: {required: 'Please enter subject'},
            email :{
                required : "Please enter email address",
                email : "Please enter vaild email address"
            },
        }
        handleFormValidate(form, rules, function(form) {
            handleAjaxFormSubmit(form,true);
        });
    }
    return {
        init:function(){
            contactDetails();
        }
    }
}();

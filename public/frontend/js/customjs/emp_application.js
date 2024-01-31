var EmpApplication = function(){
    var empApplicationDetails = function(){
        var form = $('#add-emp-application-form');
        var rules = {
            full_name: {required: true},
            email: {required: true, email: true},
            designation: {required: true},
            phone_number: {required: true},
            resume: {required: true},
            // note: {required: true},
        };
        var message = {
            full_name: {required: 'Please enter your full name'},
            email :{
                required : "Please enter email address",
                email : "Please enter vaild email address"
            },
            designation: {required: 'Please enter your designation'},
            phone_number: {required: 'Please enter your phone number'},
            resume: {required: 'Please upload your resume'},
            // note: {required: 'Please enter your note'},

        }
        handleFormValidate(form, rules, function(form) {
            handleAjaxFormSubmit(form,true);
        });
    }
    return {
        init:function(){
            empApplicationDetails();
        }
    }
}();

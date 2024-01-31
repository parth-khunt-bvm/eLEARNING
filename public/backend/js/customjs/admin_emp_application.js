var AdminEmpApplication = function(){
    var list = function(){
        var dataArr = {};
        var columnWidth = { "width": "5%", "targets": 0 };
        var arrList = {
            'tableID': '#emp_application-list',
            'ajaxURL': baseurl + "admin/emp-application/ajaxcall",
            'ajaxAction': 'getdatatable',
            'postData': dataArr,
            'hideColumnList': [],
            'noSortingApply': [0, 6],
            'noSearchApply': [0, 6],
            'defaultSortColumn': [0],
            'defaultSortOrder': 'DESC',
            'setColumnWidth': columnWidth
        };
        getDataTable(arrList);

        $("body").on("click", ".delete-records", function() {
            var id = $(this).data('id');
            setTimeout(function() {
                $('.yes-sure:visible').attr('data-id', id);
            }, 500);
        })

        $('body').on('click', '.yes-sure', function() {
            var id = $(this).attr('data-id');
            var data = { id: id, 'activity': 'delete-records', _token: $('#_token').val() };
                $.ajax({
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val(),
                },
                url:baseurl + "admin/emp-application/ajaxcall",
                data: { 'action': 'common-activity', 'data': data },
                success: function(data) {
                    $("#loader").show();
                    handleAjaxResponse(data);
                }
            });
        });

        $("body").on('click','.emp-application-view', function(){
            var id = $(this).data('id');
            console.log(id);
            var data = { 'id': id, _token: $('#_token').val() };
            $.ajax({
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val(),
                },
                url: baseurl + "admin/emp-application/ajaxcall",
                data: { 'action': 'emp-application-view', 'data': data },
                success: function (data) {
                   var empApplication=  JSON.parse(data);
                   $("#full_name").text(empApplication.full_name);
                   $("#emailId").text(empApplication.email);
                   $("#designation").text(empApplication.designation);
                   $("#phone_number").text(empApplication.phone_number);
                   $("#note").text(empApplication.note);
                }
            });
        });

    }
    return {
        init:function(){
            list();
        },
    }
}();

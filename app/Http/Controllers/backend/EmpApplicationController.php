<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\EmpApplication;
use Illuminate\Http\Request;
use Config;


class EmpApplicationController extends Controller
{
    public function list(Request $request){

        $data['title'] = Config::get('constants.PROJECT_NAME') . ' || Admin Employee Application list';
        $data['description'] = Config::get('constants.PROJECT_NAME') . ' || Admin Employee Application list';
        $data['keywords'] = Config::get('constants.PROJECT_NAME') . ' || Admin Employee Application list';
        $data['css'] = array(
            'toastr/toastr.min.css'
        );
        $data['plugincss'] = array(
            'plugins/custom/datatables/datatables.bundle.css'
        );
        $data['pluginjs'] = array(
            'toastr/toastr.min.js',
            'plugins/custom/datatables/datatables.bundle.js',
            'pages/crud/datatables/data-sources/html.js'
        );
        $data['js'] = array(
            'comman_function.js',
            'admin_emp_application.js',
        );
        $data['funinit'] = array(
            'AdminEmpApplication.init()'
        );
        $data['header'] = array(
            'title' => 'Admin Contact data list',
            'breadcrumb' => array(
                'Dashboard' => route('my-dashboard'),
                'Admin Contact data list' => 'Admin Contact data list',
            )
        );
        return view('backend.pages.emp_application.list', $data);

    }
    public function ajaxcall(Request $request){
        $action = $request->input('action');
        switch ($action) {
            case 'getdatatable':
                $objEmpApplication = new EmpApplication();
                $list = $objEmpApplication->getdatatable();
                echo json_encode($list);
                break;

                case 'emp-application-view';
                $objEmpApplication = new EmpApplication();
                $list = $objEmpApplication->get_emp_application_details($request->input('data'));
                echo json_encode($list);
                break;


            case 'common-activity':
                $objEmpApplication = new EmpApplication();
                $data = $request->input('data');
                $result = $objEmpApplication->common_activity($data);
                if ($result) {
                    $return['status'] = 'success';
                    if($data['activity'] == 'delete-records'){
                        $return['message'] = "EMployee Application details successfully deleted.";
                    }
                    $return['redirect'] = route('admin-emp-application.list');
                } else {
                    $return['status'] = 'error';
                    $return['jscode'] = '$("#loader").hide();';
                    $return['message'] = 'It seems like something is wrong';;
                }

                echo json_encode($return);
                exit;

        }
    }
}

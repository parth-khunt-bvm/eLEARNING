<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\EmpApplication;
use Illuminate\Http\Request;

class EmpApplicationController extends Controller
{
    public function index(){
        $data['css'] = array(
            'toastr/toastr.min.css'
        );
        $data['plugincss'] = array(
        );
        $data['pluginjs'] = array(
            'toastr/toastr.min.js',
            'validate/jquery.validate.min.js',
        );
        $data['js'] = array(
            'comman_function.js',
            'ajaxfileupload.js',
            'jquery.form.min.js',
            'emp_application.js',
        );
        $data['funinit'] = array(
            'EmpApplication.init()'
        );
        return view("frontend.pages.student_corner.apply_job",$data);
    }


    public function save(Request $request){

        $objEmpApplication = new EmpApplication();
        $result = $objEmpApplication->saveAdd($request);
        if ($result == "added") {
            $return['status'] = 'success';
             $return['jscode'] = '$(".submitbtn:visible").removeAttr("disabled");$("#loader").hide();';
            $return['message'] = 'Employee Application details successfully added.';
            $return['redirect'] = route('emp-application');
        } elseif ($result == "employee_mail_exists") {
            $return['status'] = 'error';
            $return['jscode'] = '$(".submitbtn:visible").removeAttr("disabled");$("#loader").hide();';
            $return['message'] = 'The email address has already been registered.';
        } else{
            $return['status'] = 'error';
            $return['jscode'] = '$(".submitbtn:visible").removeAttr("disabled");$("#loader").hide();';
            $return['message'] = 'Something goes to wrong';
        }
        echo json_encode($return);
        exit;
    }
}

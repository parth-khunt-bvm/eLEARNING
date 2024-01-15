<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Contactdata;
use Illuminate\Http\Request;

class ContactController extends Controller
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
            'contact.js',
        );
        $data['funinit'] = array(
            'Contact.init()'
        );
        return view('frontend.pages.contact', $data);
    }

    public function save(Request $request){
        $objContactdata = new Contactdata();
        $result = $objContactdata->saveAdd($request);
        if ($result == "added") {
            $return['status'] = 'success';
             $return['jscode'] = '$(".submitbtn:visible").removeAttr("disabled");$("#loader").hide();';
            $return['message'] = 'Admin contact data details successfully added.';
            $return['redirect'] = route('contact');
        } elseif ($result == "user_mail_exists") {
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

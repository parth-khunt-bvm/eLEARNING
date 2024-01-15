<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
use App\Models\Contactdata;
class AdminConatctDataController extends Controller
{
    function __construct()
    {
        $this->middleware('admin');
    }

    public function list(Request $request){

        $data['title'] = Config::get('constants.PROJECT_NAME') . ' || Admin users list';
        $data['description'] = Config::get('constants.PROJECT_NAME') . ' || Admin users list';
        $data['keywords'] = Config::get('constants.PROJECT_NAME') . ' || Admin users list';
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
            'adminusers.js',
        );
        $data['funinit'] = array(
            'Adminusers.init()'
        );
        $data['header'] = array(
            'title' => 'Admin users list',
            'breadcrumb' => array(
                'Dashboard' => route('my-dashboard'),
                'Admin users list' => 'Admin users list',
            )
        );
        return view('backend.pages.contactdata.list', $data);


    }
}

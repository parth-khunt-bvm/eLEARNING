<?php

namespace App\Http\Controllers\backend;

use App\Exports\ContactDataExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
use App\Models\Contactdata;
use Excel;
use PDF;
class AdminConatctDataController extends Controller
{
    function __construct()
    {
        $this->middleware('admin');
    }

    public function list(Request $request){

        $data['title'] = Config::get('constants.PROJECT_NAME') . ' || Admin Contact data list';
        $data['description'] = Config::get('constants.PROJECT_NAME') . ' || Admin Contact data list';
        $data['keywords'] = Config::get('constants.PROJECT_NAME') . ' || Admin Contact data list';
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
            'admin_contact_data.js',
        );
        $data['funinit'] = array(
            'AdminContactData.init()'
        );
        $data['header'] = array(
            'title' => 'Admin Contact data list',
            'breadcrumb' => array(
                'Dashboard' => route('my-dashboard'),
                'Admin Contact data list' => 'Admin Contact data list',
            )
        );
        return view('backend.pages.contactdata.list', $data);


    }

    public function ajaxcall(Request $request){
        $action = $request->input('action');
        switch ($action) {
            case 'getdatatable':
                $objContactdata = new Contactdata();
                $list = $objContactdata->getdatatable();

                echo json_encode($list);
                break;

                case 'contact-data-view';
                $objContactdata = new Contactdata();
                $list = $objContactdata->get_contact_data_details($request->input('data'));
                echo json_encode($list);
                break;


            case 'common-activity':
                $objContactdata = new Contactdata();
                $data = $request->input('data');
                $result = $objContactdata->common_activity($data);
                if ($result) {
                    $return['status'] = 'success';
                    if($data['activity'] == 'delete-records'){
                        $return['message'] = "Admin contact data details successfully deleted.";
                    }
                    $return['redirect'] = route('admin-conatct-data.list');
                } else {
                    $return['status'] = 'error';
                    $return['jscode'] = '$("#loader").hide();';
                    $return['message'] = 'It seems like something is wrong';;
                }

                echo json_encode($return);
                exit;

        }
    }


    public function getContactData()
    {
        return Excel::download(new ContactDataExport, 'contactdata.xlsx');
    }

    public function contactDataPdf(){

            $objContactdata = new Contactdata();
            $data['contact_data_details'] = $objContactdata->get_admin_contact_data_details();
            // ccd($data['contact_data_details'] );
            // $data['pdf_title'] =="jj";

            $data['title'] = 'contact data';

            $customPaper = [0, 0, 612.00, 792.00];
            $pdf = PDF::loadView('backend.pages.contactdata.pdf', $data)->setPaper($customPaper, 'portrait');

            return $pdf->download('contact_data.pdf');

    }
}

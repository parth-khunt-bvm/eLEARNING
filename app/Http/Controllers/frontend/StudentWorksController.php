<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentWorksController extends Controller
{
    public function index(){

        $data['css'] = array(
            'customcss/student_work.css'
        );
        $data['plugincss'] = array(
        );
        $data['pluginjs'] = array(
        );
        $data['js'] = array(
            'student_work.js',
        );
        $data['funinit'] = array(
            'StudentWork.init()'
        );
        return view('frontend.pages.about.student_work',$data);
    }
}

<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GIMCoursesController extends Controller
{
    public function gimCourses(){

        $data['css'] = array(
            'customcss/gim_courses.css'
        );
        $data['plugincss'] = array(
        );
        $data['pluginjs'] = array(
        );
        $data['js'] = array(
        );
        $data['funinit'] = array(
        );


        return view('frontend.pages.std10th_12th.gim_courses', $data);
    }
}

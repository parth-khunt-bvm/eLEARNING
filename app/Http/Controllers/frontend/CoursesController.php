<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
class CoursesController extends Controller
{
    public function index(){
        return view('frontend.pages.courses');
    }


    public function courseDetail($coursesName = null){
        $data['coursesDetails'] = Config::get('courses_details.courses_details')[$coursesName];
        return view('frontend.pages.courses_detail', $data);
    }
}

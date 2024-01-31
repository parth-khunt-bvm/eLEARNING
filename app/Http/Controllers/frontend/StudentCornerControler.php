<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;

class StudentCornerControler extends Controller
{
    public function chooseElearning(){

        $data['chooseElearningDetails'] = Config::get('choose_elearning.choose_elearning_details');
        return view("frontend.pages.student_corner.choose_elearning", $data);
    }

    public function placementPartners(){

        $data['css'] = array(
            'customcss/placement_partner.css'
        );
        $data['plugincss'] = array(
        );
        $data['pluginjs'] = array(
        );
        $data['js'] = array(
            'placement_partner.js',
        );
        $data['funinit'] = array(
            'placementPartners.init()'
        );

        $data['partnerDetails'] = Config::get('placement_partners.placement_partners');
        return view("frontend.pages.student_corner.placement_partners",$data);
    }



    public function studentPlacement(){

        $data['css'] = array(
            'customcss/student_placement.css'
        );
        $data['plugincss'] = array(
        );
        $data['pluginjs'] = array(
        );
        $data['js'] = array(
            'student_placement.js',
        );
        $data['funinit'] = array(
            'studentPlacement.init()'
        );
        $data['companyowlcarousel'] = Config::get('placement_partners.placement_partners');
        $data['studentsPlacement'] = Config::get('student_placement.student_placement');
        return view('frontend.pages.student_corner.student_placement', $data);
    }
}

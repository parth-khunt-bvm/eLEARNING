<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;

class StudentCornerControler extends Controller
{
    public function chooseElearning(){

        $data['chooseElearningDetails'] = Config::get('choose_elearning.choose_elearning_details');
        // ccd( $data['chooseElearningDetails']);

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
}

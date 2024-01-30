<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ITACSController extends Controller
{
    public function itaCsEthicalHacking(){
        $data['css'] = array(
            'customcss/ita_cs.css'
        );
        $data['plugincss'] = array(
        );
        $data['pluginjs'] = array(
        );
        $data['js'] = array(
        );
        $data['funinit'] = array(
        );


        return view('frontend.pages.std10th_12th.ita_cs', $data);
    }
}

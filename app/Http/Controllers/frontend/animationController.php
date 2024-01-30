<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class animationController extends Controller
{
   public function animation(){
    $data['css'] = array(
        'customcss/animation.css'
    );
    $data['plugincss'] = array(
    );
    $data['pluginjs'] = array(
    );
    $data['js'] = array(
    );
    $data['funinit'] = array(
    );
    return view('frontend.pages.std10th_12th.animation', $data);

   }
}

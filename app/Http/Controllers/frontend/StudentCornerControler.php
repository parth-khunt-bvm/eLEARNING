<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentCornerControler extends Controller
{
    public function chooseElearning(){
        return view("frontend.pages.student_corner.choose_elearning");
    }

    public function placementPartners(){
        return view("frontend.pages.student_corner.placement_partners");
    }
}

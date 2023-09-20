<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard(){
        return view('client_dashboard');
    }

    public function contact(){
        return view('client.pages.contact');
    }

    public function missionVission(){
        return view('client.pages.mission_vission');
    }

    public function history(){
        return view('client.pages.history');
    }

    public function studyNub(){
        return view('client.pages.why_study');
    }

    public function admissionInfo(){
        return view('client.pages.admission_info');
    }

    public function boardOfTrustees(){
        return view('client.pages.board_of_trustees');
    }
}

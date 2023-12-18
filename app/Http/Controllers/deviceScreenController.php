<?php

namespace App\Http\Controllers;
use Jenssegers\Agent\Agent;

use Illuminate\Http\Request;

class deviceScreenController extends Controller
{
    public function index(Request $request)
    {
        $agent = new Agent();

        if ($agent->isMobile()) {
            // Render mobile view from 'mobile' directory
            return view('mobile.index');
        } else {
            // Render desktop view from 'desktop' directory
            return view('apnadental.index');
        }
    }
}

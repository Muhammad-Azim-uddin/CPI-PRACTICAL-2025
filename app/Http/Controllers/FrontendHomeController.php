<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Department;
use Illuminate\Http\Request;

class FrontendHomeController extends Controller
{
    function home()
    {
        $about = About::first();
        $departments = Department::get();
        return view('frontend.home' , compact('about' , 'departments'));
    }

    function department()
    {
         $departments = Department::get();
        return view('frontend.departments' , compact('departments'));
    }
    function teacher()
    {
        return view('frontend.teachers');
    }
    function notice()
    {
        return view('frontend.notice');
    }
    function contact()
    {
        return view('frontend.contact');
    }


}

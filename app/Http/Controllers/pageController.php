<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }
    public function home()
    {
        return view('pages.index');
    }
    public function service()
    {
        return view('pages.service');
    }  
    public function about()
    {
        return view('pages.about');
    }    
    public function contact()
    {
        return view('pages.contact');
    }    

}

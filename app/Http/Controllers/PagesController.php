<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about()
    {
        $first = 'Vinayak';
        return view('pages.about',compact('first'));
    }
    public function contact()
    {
        $first = 'vinayak';
        return view('pages.contact',compact('first'));
    }
    public function store()
    {
        $input = Request::get('title');
    }
}
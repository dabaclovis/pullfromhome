<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index()
    {
        return view('content.devops.paga');
    }
    public function pagb()
    {
        return view('content.devops.pagb');
    }
    public function pagc()
    {
        return view('content.devops.pagc');
    }
    public function pagd()
    {
        return view('content.devops.pagd');
    }
    public function page()
    {
        return view('content.devops.page');
    }
    public function pagf()
    {
        return view('content.devops.pagf');
    }
    public function pagg()
    {
        return view('content.devops.pagg');
    }
    public function pagh()
    {
        return view('content.devops.pagh');
    }
}

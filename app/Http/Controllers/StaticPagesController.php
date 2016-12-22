<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StaticPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('staticpage/home');
    }
    public function help()
    {
      return view('staticpage/help');
    }
    public function about()
    {
      return view('staticpage/about');
    }


}

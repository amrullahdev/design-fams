<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class halamanController extends Controller
{
    /**
     * Untitled Index
     *
     * @return void
     * @author 
     **/
    public function index1()
    {
    	return view('halaman.index1');
    }

    /**
     * untitled index
     *
     * @return void
     * @author 
     **/
    public function index2()
    {
        return view('halaman.index2');
    }

    /**
     * undocumented function
     *
     * @return void
     * @author 
     **/
    public function index3()
    {
        return view('halaman.index3');
    }
}

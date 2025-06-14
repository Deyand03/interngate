<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function beranda(){
        return view('beranda.index');
    }
    public function lowongan(){
        return view('lowongan.index');
    }
    public function perusahaan(){
        return view('perusahaan.index');
    }
    public function faq(){
        return view('faq.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    // controller khusus landing page / userhome (template fitness)
    // buat npm ganjil, jangan ampe ketuker sm controller admin wkwk

    // halaman utama / beranda
    public function index()
    {
        return view('landing.index');
    }

    // halaman about us
    public function about()
    {
        return view('landing.about');
    }

    // halaman feature / keunggulan gym
    public function feature()
    {
        return view('landing.feature');
    }

    // halaman daftar paket course / latihan
    public function course()
    {
        return view('landing.course');
    }

    // halaman blog / artikel kesehatan
    public function blog()
    {
        return view('landing.blog');
    }

    // halaman contact us / hubungi kami
    public function contact()
    {
        return view('landing.contact');
    }
}

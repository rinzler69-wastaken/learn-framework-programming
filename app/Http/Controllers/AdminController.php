<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // controller khusus buat admin template (studioadmin)
    // 6 file html di-mapping ke method masing-masing biar rapih

    // dashboard utama admin studio
    public function index()
    {
        return view('admin.index');
    }

    // halaman agenda kalender
    public function calendar()
    {
        return view('admin.calendar');
    }

    // halaman elemen form (isinya banyak bgt tp yaudahlah ya)
    public function formElements()
    {
        return view('admin.form_elements');
    }

    // halaman datatables dan plugin tabel
    public function tablePlugins()
    {
        return view('admin.table_plugins');
    }

    // halaman komponen ui modal & notifikasi
    public function uiModalNotification()
    {
        return view('admin.ui_modal_notification');
    }

    // halaman login admin
    public function login()
    {
        return view('admin.page_login');
    }
}

<?php
//package
namespace App\Http\Controllers;
//import class

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home() {
        return view('dashboard');
    }
        public function blog() {
        return view('blog');
    }
            public function admin() {
        return view('dashboards.home');
    }
                public function profile() {
        return view('dashboards.profile');
    }
                public function contact() {
        return view('dashboards.contact');
    }
                    public function pelanggan() {
        return view('dashboards.faq');
    }
}

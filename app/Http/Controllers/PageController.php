<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }

    public function about(){
        return 'Muhammad Bagus Indrawan 2241720217';
    }

    public function articles($id){
        return 'Halaman Artikel dengan ID '.$id;
    }
}

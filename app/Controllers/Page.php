<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class Page extends Controller{
    public function teste() {
        return view('main_layout');
    }
}
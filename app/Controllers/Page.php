<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class Page extends Controller{
    
    public function index(){
        
    }
    public function home(){
        return view('main_layout');
    }

    public function produtos(){
        return view('produtos');
    }

}
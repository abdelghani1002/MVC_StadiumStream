<?php
namespace app\Controllers;


class HomeController extends Controller
{
    public function index() {
        $this->render('home');
    }

    public function notFound($path){
        $this->render('404', ['path' => $path]);
    }
}
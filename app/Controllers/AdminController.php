<?php
namespace app\Controllers;

use app\Controllers\Controller;

class AdminController extends Controller
{
    public function dashboard() {
        $this->render('admin/dashboard');
    }
}
<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class appController extends Controller
{
    public function index(){
    return views('app');
}

}


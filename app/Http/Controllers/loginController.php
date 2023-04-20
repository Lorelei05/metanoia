<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Kreait\Laravel\Firebase\Fascades\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;

class loginController extends Controller
{
   /* public function index()
    {
      $factory = (new Factory)->withServiceAccount('__DIR__','/firebase_credential.json');
      $firestore = $factory->createFirestore();
      $database = $firestore->database();
      $testRef = $database->collection('usuarios')->newDocument();
      $testRef->set([
        'contraseña' => "123456",
        'correo' => "pamelaorte05@gmail.com",
        'edad' => "20",
        'nombre' => "Lorelei Leon",
        'peso' => "50",
        'matricula' => "20212ITID010",
      ])
     //   return view('login');
    }*/
}

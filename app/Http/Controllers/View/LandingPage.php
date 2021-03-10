<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingPage extends Controller
{
  public function __construct(){
    echo 'Benvenuto in questo test,sono fabiomovic  <br>';
  }
  // non è il construct che è un metodo magico che viene caricato a prescindere
  public function __invoke(){
    echo 'questo è l\'invoke  <br>';
  }
  public function hello(){
    echo 'sì proprio lui incredibile!';
  }
}

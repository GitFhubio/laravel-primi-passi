<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Home extends Controller
{
  public function __invoke(){
    return $this->me();
  }

// ritornare vista da controller
  private function me(){
return view('landingpage')->with('data','ciao come stai alfredo?');
  }
}

<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Home extends Controller
{
  public function __invoke(){
    return $this->beh();
  }

// ritornare vista da controller
  private function me(){
return view('landingpage')->with('data','ciao come stai alfredo?');
  }

  private function beh(){
return view('landingpage')->with('data',['id'=>1,'name'=>'Alfredo']);
  }
}

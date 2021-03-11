<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use App\User;
class Model extends Controller
{
  public function __invoke(){
    $users= User::all();
    return view('testmodel')->with('users',$users);
  }
}

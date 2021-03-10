<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Home extends Controller
{
  public function __invoke(){
    return $this->me();
  }

  private function me(){
return 1;
  }
}

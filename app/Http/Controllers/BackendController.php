<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
   public function dashboard(){
      return view('backend.pages.dashboard');
      //return "OK";
   }
   public function BCtest(){
      return view('backend.pages.test');
      //return "OK";
   }
}

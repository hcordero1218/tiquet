<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function home()
   {
   	return view('home');
   }

      public function homeAdmin()
   {
      return view('admin.home');
   }

      public function comprar()
   {
   	return view('comprar');
   }

      public function abono()
   {
   	return view('abono');
   }
}
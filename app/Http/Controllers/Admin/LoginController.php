<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
   public function login()
   {
	return "登陆"; 
    
   }

   public function verify()
   {
     return "短信";
   }
}

<?php

namespace App\Http\Controllers;

use Validator;
use App\Http\Controllers\Controller;

class AdminPanelController extends Controller
{
   public function index()
   {
       return view('admin.index');
   }
}

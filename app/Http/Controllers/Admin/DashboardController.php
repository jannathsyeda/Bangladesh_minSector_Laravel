<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\MinistrySector;
use App\Ministers;

class DashboardController extends Controller
{
   public function index(){

      $AllMinisters =Ministers::latest()->get();
      $AllSector =MinistrySector::latest()->get();

   	return view('admin.dashboard',compact('AllMinisters','AllSector'));
   }

  
}

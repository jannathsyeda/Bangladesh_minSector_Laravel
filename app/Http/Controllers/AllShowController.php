<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\MinistrySector;
use App\Ministers;

class AllShowController extends Controller
{
    public function SectorDetail($id){
        $Sector =MinistrySector::where('id', $id)->first();
        
       return view('SectorDetails',compact('Sector'));

    }

    public function MinisterDetail($id){
        $Ministers =Ministers::where('id', $id)->first();
        
       return view('MinisterDetail',compact('Ministers'));

    }

    
    public function AllMinisters(){
        $AllMinisters =Ministers::latest()->paginate(2);
        
       return view('AllMinisters',compact('AllMinisters'));

    }

    public function AllSectors(){
        $AllSector =MinistrySector::latest()->paginate(3);
        
       return view('AllSectors',compact('AllSector'));

    }

    public function About(){
        
       return view('about');

    }



}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;

use App\Ministers;

class MinistersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Ministers = Ministers::latest()->paginate(8);
        return view('admin.Ministers.index',compact('Ministers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Ministers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'title' =>'required',
            'achievement' =>'required',

            'gender' =>'required',
            'details' =>'required',

            'image' => 'required|mimes:jpeg,png,jpg',


            ]);



               // Get Form Image
          $image = $request->file('image');

         
          if (isset($image)) {

                   
             // Make Unique Name for Image 
            $currentDate = Carbon::now()->toDateString();
            $imageName =$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
  
  
          // Check Category Dir is exists
  
              if (!Storage::disk('public')->exists('ministers')) {
                 Storage::disk('public')->makeDirectory('ministers');
              }
  
  
              // Resize Image for category and upload
              $MinistersImage = Image::make($image)->resize(180,210)->stream();
              Storage::disk('public')->put('ministers/'.$imageName,$MinistersImage);
  
     }else{
      $imageName = "default.png";
     }

            $Ministers = new Ministers();
            $Ministers->name = $request->name;
            $Ministers->title = $request->title;
            $Ministers->achievement = $request->achievement;
            $Ministers->image= $imageName;
            $Ministers->gender = $request->gender;
            $Ministers->details = $request->details;
            $Ministers->save();

    
            return redirect(route('admin.Ministers.index'))->with('success', 'Minister Inserted Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\MinistrySector;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;


class MinistrySectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Sectors = MinistrySector::latest()->paginate(8);
        return view('admin.MinistrySectors.index',compact('Sectors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.MinistrySectors.create');
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
            'sector' => 'required',
            'description' =>'required',
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
              $SectorImage = Image::make($image)->resize(170,200)->stream();
              Storage::disk('public')->put('ministers/'.$imageName,$SectorImage);
  
     // Check Category Slider Dir is exists
   
     if (!Storage::disk('public')->exists('category/slider')) {
        Storage::disk('public')->makeDirectory('category/slider');
     }


     // Resize Image for category slider and upload
     $slider = Image::make($image)->resize(1600,479)->stream();
     Storage::disk('public')->put('category/slider/'.$imageName,$slider);
    
    
            }else{
      $imageName = "default.png";
     }

            $MinistrySector = new MinistrySector();
            $MinistrySector->sector = $request->sector;
            $MinistrySector->image = $imageName;

            $MinistrySector->description = $request->description;
            $MinistrySector->save();
    
            return redirect(route('admin.MinistrySectors.index'))->with('success', 'Sector Inserted Successfully');
        }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
    $MinistrySector = MinistrySector::find($id);
      return view('admin.MinistrySectors.show',compact('MinistrySector'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(MinistrySector $MinistrySector)
    {
                 return view('admin.MinistrySectors.edit',compact('MinistrySector',
                    $MinistrySector));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MinistrySector $MinistrySector)
    {
         $this->validate($request,[
            'sector' => 'required',
            'description' =>'required'

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
  
        // Delete old post image
        if(Storage::disk('public')->exists('ministers/'.$MinistrySector->image)){
            Storage::disk('public')->delete('ministers/'.$MinistrySector->image);
        }
  
        // Resize Image for category and upload
        $SectorImage = Image::make($image)->resize(170,200)->stream();
        Storage::disk('public')->put('ministers/'.$imageName,$SectorImage);
  
     }else{

        $ext = pathinfo(public_path().'ministers/'.$MinistrySector->image, PATHINFO_EXTENSION);
        $currentDate = Carbon::now()->toDateString();
        $imageName = $currentDate.'-'.uniqid().'.'.$ext;
              
        Storage::disk('public')->rename('ministers/'.$MinistrySector->image, 'ministers/'.$imageName);
        $MinistrySector->image = $imageName;
     }
  
    

            $MinistrySector->sector = $request->sector;
            $MinistrySector->image = $imageName;
            $MinistrySector->description = $request->description;
            $MinistrySector->save();
    
            return redirect(route('admin.MinistrySectors.index'))->with('success', 'Sector Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(MinistrySector $MinistrySector)
    {
       $MinistrySector->delete();

        return redirect(route('admin.MinistrySectors.index'))->with('success', 'Sector deleted Successfully');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\MinistrySector;


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
            'description' =>'required'

            ]);

            $MinistrySector = new MinistrySector();
            $MinistrySector->sector = $request->sector;
            $MinistrySector->description = $request->description;
            $MinistrySector->save();
    
            return redirect(route('admin.MinistrySectors.index'))->with('success', 'MinistrySector Inserted Successfully');
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

            $MinistrySector->sector = $request->sector;
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

<?php

namespace App\Http\Controllers;

use App\Sermon;
use Illuminate\Http\Request;

class SermonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sermons = Sermon::all();
        return view('public.sermons',compact('sermons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sermon_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'pastor_name' => 'required',
            'location' => 'required',
            'sermon_name' => 'required',
            'image' => 'required|image',
            'video' => 'required',
            'sermon_text' => 'required',
            'day' => 'required',
            'month' => 'required',
        ]);
        $imgName = uniqid().".".$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'),$imgName);

        $sermon = Sermon::create([
            'pastor_name' => $request->pastor_name,
            'location' => $request->location,
            'sermon_name' => $request->sermon_name,
            'image'=>$imgName,
            'video' => $request->video,
            'sermon_text' => $request->sermon_text,
            'day' => $request->day,
            'month' => $request->month,
        ]);
        return redirect('sermon/create')->with("message","Sermon Created Successfully!");
    }   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('public.sermon_details');
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

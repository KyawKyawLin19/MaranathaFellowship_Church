<?php

namespace App\Http\Controllers;

use App\Sermon;
use App\Cnew;
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
        $sermons = Sermon::orderBy('created_at','desc')->paginate('9');
        return view('public.sermons',compact('sermons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sermons_create');
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
            'video' => 'required',
            'sermon_text' => 'required',
            'day' => 'required',
            'month' => 'required',
        ]);
        // $imgName = uniqid().".".$request->image->getClientOriginalExtension();
        // $request->image->move(public_path('images'),$imgName);

        $sermon = Sermon::create([
            'pastor_name' => $request->pastor_name,
            'location' => $request->location,
            'sermon_name' => $request->sermon_name,
            'video' => $request->video,
            'sermon_text' => $request->sermon_text,
            'day' => $request->day,
            'month' => $request->month,
        ]);
        return redirect('admin')->with("message","Sermon Created Successfully!");
    }   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sermon = Sermon::find($id);
        $news = Cnew::orderBy('created_at','desc')->paginate(4);
        return view('public.sermon_details',compact(['sermon','news']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sermon = Sermon::find($id);
        return view('sermons_update',compact('sermon'));
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
        $validatedData = $request->validate([
            'pastor_name' => 'required',
            'location' => 'required',
            'sermon_name' => 'required',
            'video' => 'required',
            'sermon_text' => 'required',
            'day' => 'required',
            'month' => 'required',
        ]);

        // $imgName = uniqid().".".$request->image->getClientOriginalExtension();
        // $request->image->move(public_path('images'),$imgName);

        $sermon = Sermon::whereId($id)->update([
            'pastor_name' => $request->pastor_name,
            'location' => $request->location,
            'sermon_name' => $request->sermon_name,
            'video' => $request->video,
            'sermon_text' => $request->sermon_text,
            'day' => $request->day,
            'month' => $request->month,
        ]);

        return redirect('admin')->with("message","Sermon Updated Successfully!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Sermon::whereId($id)->delete();
        return redirect('admin')->with("message_delete","Sermon Deleted successfully!!!");
    }
}

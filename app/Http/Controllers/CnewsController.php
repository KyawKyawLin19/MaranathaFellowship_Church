<?php

namespace App\Http\Controllers;

use App\Cnew;
use Illuminate\Http\Request;

class CnewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = Cnew::all();
        return view('public.news',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valdiateData = $request->validate(
            [
                'title' => 'required',
                'pastor_name' => 'required',
                'time' => 'required',
                'date' => 'required',
                'description' => 'required',
            ]
        );

        Cnew::create($valdiateData);
        return redirect('adminhome')->with("message","News Created Successfully!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cnew  $cnew
     * @return \Illuminate\Http\Response
     */
    public function show(Cnew $cnew)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cnew  $cnew
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $new = Cnew::find($id);
        return view('news_update',compact('new'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cnew  $cnew
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $valdiateData = $request->validate(
            [
                'title' => 'required',
                'pastor_name' => 'required',
                'time' => 'required',
                'date' => 'required',
                'description' => 'required',
            ]
        );

        Cnew::whereId($id)->update($valdiateData);
        return redirect('news/all')->with("message","News Updated Successfully!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cnew  $cnew
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cnew::whereId($id)->delete();
        return redirect('news/all')->with("message_delete","News Deleted successfully!!!");
    }

    public function allNews(){
        $news = Cnew::all();
        return view('allnews',compact('news'));
    }
}

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
        return view('public.news');
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
        //
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
    public function edit(Cnew $cnew)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cnew  $cnew
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cnew $cnew)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cnew  $cnew
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cnew $cnew)
    {
        //
    }

    public function allNews(){
        $news = Cnew::all();
        return view('allnews',compact('news'));
    }
}

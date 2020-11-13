<?php

namespace App\Http\Controllers;

use App\titleinfo;
use Illuminate\Http\Request;

class coordinatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $titleinfos = titleinfo::all();
        return view('coordinator.coordinator', compact('titleinfos'));
    }

    public function alltitle()
    {
        //
        $titleinfos = titleinfo::all();
        return view('coordinator.alltitle', compact('titleinfos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\titleinfo  $titleinfo
     * @return \Illuminate\Http\Response
     */
    public function show(titleinfo $titleinfo)
    {
        //
        return view('coordinator.titledetail', compact('titleinfo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\titleinfo  $titleinfo
     * @return \Illuminate\Http\Response
     */
    public function edit(titleinfo $titleinfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\titleinfo  $titleinfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, titleinfo $titleinfo)
    {
        //
        $request->validate(['comment' => 'required']);

        titleinfo::where('id', $titleinfo->id)
            ->update(['comment'=> $request->comment]);

        return redirect('/titleinfos/'.$titleinfo->id)->with('status','comment updated');
    }

    public function acceptbtn(Request $request, titleinfo $titleinfo)
    {
        //

        // dd($request->status1);

        titleinfo::where('id', $titleinfo->id)
            ->update(['status'=> $request->status1]);

        return redirect('/coordinator');
    }

    public function rejectbtn(Request $request, titleinfo $titleinfo)
    {
        //

        // dd($request->titleid);

        titleinfo::where('id', $titleinfo->id)
            ->update(['status'=> $request->status2]);

        return redirect('/coordinator');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\titleinfo  $titleinfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(titleinfo $titleinfo)
    {
        //
    }
}

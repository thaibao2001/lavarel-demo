<?php

namespace App\Http\Controllers;

use App\Models\nhan_vien;
use Illuminate\Http\Request;

class nhanviencontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $db = nhan_vien::all();
        return view('nhanvien.index',['nhanvien'=>$db]);
        //
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
     * @param  \App\Models\nhan_vien  $nhan_vien
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $db = nhan_vien::find($id);
        return view('nhanvien.edit',['nhanvien'=>$db]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\nhan_vien  $nhan_vien
     * @return \Illuminate\Http\Response
     */
    public function edit(nhan_vien $nhan_vien)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\nhan_vien  $nhan_vien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, nhan_vien $nhan_vien)
    {
        $db = news::find($request->nid);
        $db->title=$request->ntitle;
        $db->content=$request->ncontent;
        $db->image=$request->nimage;
        $db->save();
        return redirect()->to('/admin/news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\nhan_vien  $nhan_vien
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $db = nhan_vien::find($id)->delete();
        return redirect()->to('/admin/nhanvien');
        //
    }
}

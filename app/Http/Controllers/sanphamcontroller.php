<?php

namespace App\Http\Controllers;

use App\Models\loaiSP;
use App\Models\sanpham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class sanphamcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $db = sanpham::all();
        $loaisp = loaiSP::all();
        return view('sanpham.index',['sanpham'=>$db, 'loaisp'=>$loaisp]);
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
     * @param  \App\Models\sanpham  $sanpham
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $db = sanpham::find($id);
        $loaisp = loaiSP::all();
        return view('sanpham.edit',['sanpham'=>$db, 'loaisp'=>$loaisp]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sanpham  $sanpham
     * @return \Illuminate\Http\Response
     */
    public function edit(sanpham $sanpham)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sanpham  $sanpham
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $db = sanpham::find($request->sid);
        $db->name=$request->sname;
        $db->mota_sp=$request->description;
        $db->id_loai_sp=$request->get('loaisp');
        $db->save();
        return redirect()->to('/admin/sanpham');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sanpham  $sanpham
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $db = sanpham::find($id);
        $image=$db->image;
        File::delete(public_path().'/admin1/upload/sanpham/'.$image);
        $db ->delete();
        return redirect()->to('/admin/sanpham');
        //
    }
}

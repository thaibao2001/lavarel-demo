<?php

namespace App\Http\Controllers;

use App\Models\news;
use App\Models\sanpham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class newscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $db = news::all();
        return view('news.index',['news'=>$db]);
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
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $db = news::find($id);

        return view('news.edit',['news'=>$db]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(news $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $db = news::find($request->sid);
        $db->content=$request->ncontent;
        /*$db->image=$request->image;*/


        /*if(gettype($request-> img)!='unknown type'){
            $image = $request -> img;
            $storedPath = $image -> move('/admin1/upload/sanpham/');
            $imagename = pathinfo($storedPath, 8);
            $db->image = $imagename;
        }
        else throw new \Exception('j');*/
        /*if($request->hasFile('img')){
            throw new \Exception();
        }*/
        if($request->hasFile('img')){
            $image = $request -> file('img');
            $imageName = $image->getClientOriginalName();
            $storedPath = $image ->move(public_path().'/admin1/upload/sanpham/', $imageName);
            $db->image = $imageName;
        }
        $db->save();
        return redirect()->to('/admin/news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $db = sanpham::find($id);
        $image=$db->image;
        File::delete(public_path().'/admin1/upload/sanpham/'.$image);
        $db ->delete();
        return redirect()->to('/admin/news');
    }
}
